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
            <a class="nav-item nav-link" href="{{route('internReport')}}">Report</a>
            <a class="nav-item nav-link" href="{{route('saveReport')}}">Saved Reports</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <p class="card-header" style="text-align: center; font-weight: bold;">{{Auth::user()->name}}'s profile</p>
            <div class="card-body" style="font-size: large;font-weight: 200; text-align: center;">
                <div>
                    <a href="{{route('create-mentor')}}" class="btn btn-success"
                        style="float:right;background-color: #d6c66f;">Edit
                        Profile</a>
                </div>
                <br>
                <br>
                <form method="post" action="">
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Name:
                            {{Auth::user()->name}}</label>
                    </div>

                    <div class="mb-3 row">
                        <label for="surname" class="col-md-4 col-form-label text-md-end text-start">Surname:
                            {{Auth::user()->surname}}</label>
                    </div>

                    <div class="mb-3 row">
                        <label for="perselNo" class="col-md-4 col-form-label text-md-end text-start">Persel:
                            {{Auth::user()->perselNo}}
                        </label>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email:
                            {{Auth::user()->email}}
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection