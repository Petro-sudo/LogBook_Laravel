<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InternController extends Controller
{
    public function internback()
    {
        return view("auth.dashboardadmin");
    }
    public function internview(){
    $users = DB::select('select * from users where role = 1');
        return view('admin.admin-intern',['users'=>$users]);
    }
    
   
}
