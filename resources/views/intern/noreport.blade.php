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
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <p class="card-header" style="text-align: center; font-weight: bold;">{{Auth::user()->name}}'s Signed
                Reports</p>
            <div class="card-body" style="text-align: center;">
                <h1>You have no saved Reports</h1>
            </div>
        </div>
    </div>
</div>
@endsection