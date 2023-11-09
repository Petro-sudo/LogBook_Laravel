@extends('auth.layouts')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="av-item nav-link active" href="{{route('dashboard')}}">Dashboard </a>
            <a class="nav-item nav-link" href="{{route('mentorProfile')}}">Profile</a>
            <a class="nav-item nav-link" href="">View Reports </a>

        </div>
    </div>
</nav>
<div class="row justify-content-center mt-5">
    <div class="card">
        <div class="card-header" style="text-align: center;">Hi {{Auth::user()->name}}
             Welcome to Department of Transport</div>
        <div class="card-body">
            <p style="font-weight: bold;font-size: large;text-align: center;">**You will be mentoring your Intern for 24 Months**</p>
            <p style="font-weight: bold;font-size: large;">-View your intern Monthly report</p>
            <p style="font-weight: bold;font-size: large;">-Give Remarks</p>
            <p style="font-weight: bold;font-size: large;">-Send it to HRD for reviewing</p>
            
        </div>
    </div>
</div>

    
@endsection