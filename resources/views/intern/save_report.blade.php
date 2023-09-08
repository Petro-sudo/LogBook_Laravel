@extends('auth.layouts')

@section('content')
@include('sweetalert::alert')
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
            <p class="card-header" style="text-align: center; font-weight: bold;">{{Auth::user()->name}}'s To sumbits
                reports</p>
            <div class="card-body" style="text-align: center;">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <tr>
                        <th>Select Date To Edit</th>
                    </tr>
                    @foreach ($reports as $report)
                    <tr>
                        <td>
                            <a href="{{route('editreport',['report'=> $report])}}">{{$report->startDate}} :
                                {{$report->endDate}}</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection