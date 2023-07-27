<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MentorController extends Controller
{
    public function mentorback()
    {
        return view("auth.dashboardadmin");
    }

    public function mentorview()
    {
        // $mentors = DB::select('select * from mentors where role = 3');
        $mentors = Mentor::all();
        return view('admin.admin-mentor', ['mentors' => $mentors]);
    }
    public function getmentorpage()
    {

        return view('admin.create-mentor');
    }
    public function storementor(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:250',
            'surname' => 'required|string|max:250',
            'perselNo' => 'required|numeric|min:8',
            'email' => 'required|email|max:250|unique:users',
            'role' => 'required'
        ]);

        $newMentor = Mentor::create($data);
        return redirect(route('admin-mentor'));
    }
    public function edit(Mentor $mentor)
    {
        return view('admin.edit-mentor', ['mentor' => $mentor]);
    }

    public function update(Request $request, $id)
    {

    }



}