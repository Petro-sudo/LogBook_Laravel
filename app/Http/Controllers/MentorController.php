<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    public function mentorback()
    {
        return view("auth.dashboardadmin");
    }

    public function mentorview()
    {
      
        $users = DB::select('select * from users where role = 3');
        return view('admin.admin-mentor', ['mentors' => $users]);
    }
    
    public function profile()
    {
        
        $users = Auth::user();
        $user = User::where('id',$users->id)->get();//GET ONE USER INFO
        return view('mentor.mentor-profile')->with('user',$user);
    }
    public function editmentorprofile($user)
    {
     
        if ($user != auth()->id()){
            abort(code:403);
        }
        return view('mentor.edit-mentor', ['user' => User::findOrFail($user)]);
    }
    public function updatementorprofile(User $user, Request $request)
    {
        $data = $request->validate([
        
            'name' => 'required|string|max:250',
            'surname' => 'required|string|max:250',
            'perselNo' => 'required|numeric|digits:8',
            'mentorNumber'=>'numeric|digits:10',
          
        ]);
        $user->update($data);
        Alert::success('Success', 'You have Successfully Updated your Profile');
        return redirect(route('mentorProfile'));
      

    }

    public function view(User $users)
    {
         $user = Auth::user();
         $users = User::where('mentorid',$user->id)->orderBy('name', 'desc')->get();
        return view('mentor.view-report')->with('users', $users);
    }

    public function date(Report $reports)
    {
         $user = Auth::user();
         //$reports = DB::select('select * from reports where user_id =2');
       $reports = Report::where('mentor_id', $user->id)->orderBy('startDate', 'desc')->get();//GET ONE USER INFO
        return view('mentor.date-report')->with('reports', $reports);

    }

    public function viewReport()
    { 
        $users = Auth::user();
        //$user = User::join('reports','reports.user_id', '=', 'users.id')->where('reports.user_id','=',$users->id)->get();
        $user = User::join('reports','reports.user_id', '=', 'users.id')->where('reports.mentor_id','=',$users->id)->get();
       //dd($user)  ;      // $user = User::where('id',$users->id)->get();//GET ONE USER INFO
        return view('mentor.view')->with('user',$user);
     }  

    } 

  