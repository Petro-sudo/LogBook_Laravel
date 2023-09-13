@extends('auth.layouts')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="av-item nav-link active" href="{{route('dashboard')}}">Dashboard</a>
            <a class="nav-item nav-link" href="{{route('internProfile')}}">Profile</a>
            <a class="nav-item nav-link" href="{{route('createReport')}}">Create Report </a>
            <a class="nav-item nav-link" href="{{route('saveReport')}}">Saved Reports</a>
            <a class="nav-item nav-link" href="{{route('internReport')}}">Report</a>

        </div>
    </div>
</nav>
<div class="row justify-content-center mt-5">
    <div class="card">
        <p class="card-header" style="text-align: center; font-weight: bold;">{{Auth::user()->name}}'s Profile</p>


        @foreach ($user as $users)
        <div class="card-body">
            <div>
                <a href="{{route('editprofile',['user'=> $users])}}" class="btn btn-success"
                    style="float:right;background-color: #d6c66f;">Edit
                    Profile</a>
            </div>


            <br>
            <br>
            <p style="font-size: large;">Name and Surname: {{ $users->name }} {{ $users->surname }}
            </p>
            <p style="font-size: large;">Email: {{ $users->email }}</p>
            <p style="font-size: large;">Persel: {{ $users->perselNo }}</p>
            <p style="font-size: large;">ID Number: {{ $users->internID }}</p>

            <p style="font-size: large;">Contact Number:
                {{ $users->internNumber }}</p>
            <p class="card-header" style="text-align: center; font-weight: bold;">Mentor's Details</p>

            <p style="font-weight: bold;font-size: large;">Name and Surname:
                {{ $users->mentorName }}</p>
            <p style="font-weight: bold;font-size: large;">Contact Number:
                {{ $users->mentorNumber }}</p>

        </div>

        @endforeach
    </div>
</div>
@endsection