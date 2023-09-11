<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mentor;
class YearsController extends Controller
{
    //YEAR 2023
    public function adminview2023()
    {

        $users = DB::select('select * from users where role = 2 && year = 2023');
        return view('admin.years.2023.admin-admin2023', ['users' => $users]);
    }

    public function mentorview2023()
    {
       
        $mentors = Mentor::all();
        return view('admin.admin-mentor', ['mentors' => $mentors]);
    }

    public function internview2023()
    {
       
            $users = DB::select('select * from users where role = 1 && year = 2023');
            return view('admin.years.2023..admin-intern2023', ['users' => $users]);
    }

    //YEAR 2024
}