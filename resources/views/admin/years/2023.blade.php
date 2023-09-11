@extends('auth.layouts')

@section('content')

<div class="container">
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">Hi Admin {{Auth::user()->name}}
                    {{Auth::user()->surname}} </div>
                <div class="card-body" style="text-align: center;">

                    <button onclick="window.location.href='{{route('admin-intern2023')}}'"
                        class="btn btn-primary btn-block" style="background-color: #d6c66f;">Intern
                        2023
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection