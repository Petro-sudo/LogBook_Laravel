<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
//use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class InternController extends Controller
{
    // public function internback()
    // {
    //     return view("auth.dashboardadmin");
    // }
    public function internview()
    {
        $users = DB::select('select * from users where role = 1');
        return view('admin.admin-intern', ['users' => $users]);
    }

    public function profile()
    {
        $users = Auth::user();
        $user = User::where('id',$users->id)->get();//GET ONE USER INFO
        return view('intern.view-profile')->with('user',$user);
    }
    public function dashboard()
    {
        return view('auth.dashboardintern');
    }
    public function report()
    {
        return view('intern.report');
    }
    
    public function savereport(Report $reports)
    {
         $user = Auth::user();
        //$reports = Report::All(); get ALL DATA WITHOUT CONDITIONS
        $reports = Report::where('user_id',$user->id)->orderBy('startDate', 'desc')->get();//GET ONE USER INFO
        return view('intern.save_report')->with ('reports', $reports);
    }
    public function createreport()
    {
        $users = DB::select('select * from users where role = 1');
        return view('intern.createreport')->with('users',$users);
    }

    public function storereport(Request $request)
    {
       
        $data = $request->validate([
            
            'startDate' => 'required',
            'endDate' => 'required',
            'hours' => '',
            'taskDescrition' => 'required|string|max:3000',
            'file' => '',
           'user_id' => 'required'
        ]);
        
        $newReport = Report::create($data);
        Alert::success('Success', 'Your have Created a Report');
        return redirect(route('saveReport'));
    }
    public function edit(Report $report)
    {
        if ($report->user_id != auth()->id()){
            abort(code:403);
        }
        return view('intern.edit_report', ['report' => $report]);
    }
    
    public function updateReport(Report $report, Request $request)
    {
        $data = $request->validate([
            'startDate' => '',
            'endDate' => '',
            'hours' => '',
            'taskDescrition' => 'max:3000',
            'file' => ''

        ]);
        $report->update($data);
        Alert::success('Success', 'You have Updated your Report');
        return redirect(route('saveReport'));
        //->with('suceess','msg for success')

    }
    public function search(User $user)
    { 
       
            $search_row = $_GET['search'];
            if (empty($search_row)){
                Alert::warning('Error', 'Intern not found');
                $users = DB::select('select * from users where role = 1');
                return view('admin.admin-intern', ['users' => $users]);
            }
            else{ 
            $users = User::where('surname', 'LIKE', '%' . $search_row . '%')
                ->orWhere('name', 'LIKE', '%' . $search_row . '%')
                ->orWhere('perselNo', 'LIKE', '%' . $search_row . '%')
                ->orWhere('year', 'LIKE', '%' . $search_row . '%')
                ->get();
            return view('admin.search.searchintern', compact('users'));
            }
    }
    public function editprofile($user)
    {
       // return view('intern.edit-intern', ['users' => $users]);
        return view('intern.edit-intern', ['user' => User::findOrFail($user)]);
    }
    public function updateprofile(User $user, Request $request)
    {
        $data = $request->validate([
        
            'name' => 'required|string|max:250',
            'surname' => 'required|string|max:250',
            'perselNo' => 'required|numeric|digits:8',
            'internNumber'=>'numeric|digits:10',
            'mentorName'=>'',
            'mentorNumber'=>'numeric|digits:10',
            'internID'=>'numeric|digits:13'
        ]);
        $user->update($data);
        Alert::success('Success', 'You have Successfully Updated your Profile');
        return redirect(route('internProfile'));
        //->with('suceess','msg for success')

    }

}

// 'internNumber',
//         'mentorName',
//         'mentorNumber',
//         'internID'

// public function search(Request $request) { $this->validateSearchRequest($request);
//         if (Auth::user()->isSuperAdmin()) {
    
//             return User::where('fname', 'like', '%' . $request->search_keywords . '%')
//                 ->orWhere('lname', 'like', '%' . $request->search_keywords . '%')
//                 ->orderBy('fname')
//                 ->limit($this->defaultLimitTo)
//                 ->get();
    
//         } else {
    
//             return User::where('admin_id', Auth::id())
//                 ->orWhere('fname', 'like', '%' . $request->search_keywords . '%')
//                 ->orWhere('lname', 'like', '%' . $request->search_keywords . '%')
//                 ->orderBy('fname')
//                 ->limit($this->defaultLimitTo)
//                 ->get();
    
//         }
//     }