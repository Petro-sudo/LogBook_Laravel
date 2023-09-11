<?php

namespace App\Http\Controllers;


use App\Models\Mentor;
use App\Models\User;
use Closure;
//use DB;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminback()
    {
        return view("auth.dashboardadmin");
    }

    public function adminview()
    {

        $users = DB::select('select * from users where role = 2');
        return view('admin.admin-admin', ['users' => $users]);
    }
    public function colleague2023()
    {
        return view("admin.years.2023");
    }

    

}