<?php

namespace App\Http\Controllers;

use App\Models\Mentor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MentorController extends Controller
{
    public function mentorback()
    {
        return view("auth.dashboardadmin");
    }

    public function mentorview()
    {
        // $mentors = DB::select('select * from mentors where role = 3');
        //$mentors = Mentor::all();
        //return view('admin.admin-mentor')->with('mentors',$mentors);
        $users = DB::select('select * from users where role = 3');
        return view('admin.admin-mentor', ['mentors' => $users]);
    }
    public function getmentorpage()
    {
        return view('admin.create-mentor');
    }
    public function storementor(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required|string|max:250',
            'lname' => 'required|string|max:250',
            'perselN' => 'required|numeric|digits:8',
            'emailMentor' => 'required|email|max:250|unique:mentors',
            'year' => 'required'
        ]);

        $newMentor = Mentor::create($data);
        Alert::success('Congrates', 'You have  Created a Mentror');
        return redirect(route('admin-mentor'));
    }
    public function edit(Mentor $mentor)
    {
        return view('admin.edit-mentor', ['mentor' => $mentor]);
    }

    public function updateMentor(Mentor $mentor, Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'perselN' => 'required|numeric|digits:8'
        ]);
        $mentor->update($data);
        Alert::success('Successful', 'You have Updated a Mentor');
        return redirect(route('admin-mentor'));
        //->with('suceess','msg for success')

    }

    public function search(Mentor $mentors)
    {
       
            $search_row = $_GET['search'];
            if (  $search_row != "")
            {
            $mentors = Mentor::where('lname', 'LIKE', '%' . $search_row . '%')
                ->orWhere('fname', 'LIKE', '%' . $search_row . '%')
                ->orWhere('perselN', 'LIKE', '%' . $search_row . '%')
                ->orWhere('year', 'LIKE', '%' . $search_row . '%')
                ->get();
            return view('admin.search.searchmentor', compact('mentors'));
            }    
            else{
                abort(code:403);
            }    
    }
    
}