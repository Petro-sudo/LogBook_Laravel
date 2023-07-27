<?php

namespace App\Http\Controllers;


use App\Models\Mentor;
use Closure;
//use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

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

}