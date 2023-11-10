@extends('auth.layouts')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <div class="navbar-nav">
            <a class="av-item nav-link active" href="{{route('dashboard')}}">Dashboard </a>
            <a class="nav-item nav-link" href="{{route('mentorProfile')}}">Profile</a>
            <a class="nav-item nav-link" href="{{route('viewreport')}}">View Reports</a>

        </div>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <p class="card-header" style="text-align: center; font-weight: bold;">{{Auth::user()->name}} View
                Reports</p>
            @include('sweetalert::alert')
            <div class="card-body" style="text-align: center;">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <tr>
                        <th>Select Intern to View Report</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            <a href="{{route('datereport',[($user->id)])}}">{{$user->name}} :
                                {{$user->surname}}</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>
    </div>
</div>
@endsection