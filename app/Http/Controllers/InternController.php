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
        return view('intern.view-profile');
        //return view('admin.edit-mentor');
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
}