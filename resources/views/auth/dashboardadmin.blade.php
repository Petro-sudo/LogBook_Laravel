@extends('auth.layouts')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="av-item nav-link active" href="{{route('dashboard')}}">Dashboard </a>
            <a class="nav-item nav-link" href="{{route('admin-intern2023')}}">2023 Interns</a>
            <a class="nav-item nav-link" href="">2024 Interns</a>

        </div>
    </div>
</nav>
<div class="row justify-content-center mt-5">
    <div class="card">
        <div class="card-header" style="text-align: center;">Hi {{Auth::user()->name}}
            {{Auth::user()->surname}} Welcome to Department of Transport</div>
        <div class="card-body">
            <p style="font-weight: bold;font-size: large;text-align: center;">**Aim And Mission From HRD**</p>

            <div class="card-body" style="text-align: center;">

                <button onclick="window.location.href='{{route('admin-admin')}}'" class="btn btn-danger btn-block"
                    style="background-color: #f58742;">All Administrators

                </button>
                <br><br>
                <button onclick="window.location.href='{{route('admin-intern')}}'" class="btn btn-primary btn-block"
                    style="background-color: #d6c66f;">All Interns

                </button>
                <br><br>
                <button onclick="window.location.href='{{route('admin-mentor')}}'" class="btn btn-secondary btn-block"
                    style="background-color: #85603d;">All Mentors

                </button>
            </div>

        </div>
    </div>
</div>


@endsection