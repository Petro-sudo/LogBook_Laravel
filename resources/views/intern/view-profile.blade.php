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
        <p class="card-header" style="text-align: center; font-weight: bold;">{{Auth::user()->name}}'s profile</p>
        <div class="card-body">
            <div>
                <a href="" class="btn btn-success" style="float:right;background-color: #d6c66f;">Edit
                    Profile</a>
            </div>
            <br><br>
            <p style="font-weight: bold;font-size: large;">Name:
                {{Auth::user()->name}}</p>
            <p style="font-weight: bold;font-size: large;">Surname:
                {{Auth::user()->surname}}</p>
            <p style="font-weight: bold;font-size: large;">Persel:
                {{Auth::user()->perselNo}}</p>
            <p style="font-weight: bold;font-size: large;">Email:
                {{Auth::user()->email}}</p>
        </div>
    </div>
</div>
@endsection