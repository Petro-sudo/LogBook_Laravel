<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function savereport(Report $report)
    {
        // if ($report->user_id != auth()->id()){
        //     abort(code:403);
        // }

        $reports = Report::all();
        //$reports = DB::select('select startDate, endDate from reports');
        return view('intern.save_report', ['reports' => $reports]);
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
        if ($report->user_email != auth()->id()){
            abort(code:403);
        }
        return view('intern.edit_report', ['report' => $report]);
    }
}

// $validator = Validator::make($request->all(), [
//     'email' => 'required|exists:users',
// ]);

// if ($validator->fails()) {
//     flash('Email Does Not Exists')->error();
// }