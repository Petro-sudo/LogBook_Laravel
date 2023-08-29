<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function savereport()
    {

        $reports = Report::all();
        //$reports = DB::select('select startDate, endDate from reports');
        return view('intern.save_report', ['reports' => $reports]);
    }
    public function createreport()
    {
        return view('intern.createreport');
    }

    public function storereport(Request $request)
    {
        $data = $request->validate([
            'startDate' => 'required',
            'endDate' => 'required',
            'hours' => '',
            'taskDescrition' => 'required|string|max:3000',
            'file' => '',
            'user_email' => 'required|string|max:255'
        ]);
        
        $newReport = Report::create($data);
        return redirect(route('saveReport'));
    }
    public function edit(Report $report)
    {
        return view('intern.edit_report', ['report' => $report]);
    }
}