@extends('auth.layouts')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="av-item nav-link active" href="{{route('dashboard')}}">Dashboard </a>
            <a class="nav-item nav-link" href="{{route('internProfile')}}">Profile</a>
            <a class="nav-item nav-link" href="{{route('createReport')}}">Create Report </a>
            <a class="nav-item nav-link" href="{{route('saveReport')}}">Saved Reports</a>
            <a class="nav-item nav-link" href="{{route('internReport')}}">Report</a>
        </div>
    </div>
</nav>
<div class="row justify-content-center mt-5">
    <div class="card">
        <div class="card-header" style="text-align: center;">Hi Intern {{Auth::user()->name}}
            {{Auth::user()->surname}} </div>
        <div class="card-body">
            <p style="font-weight: bold;font-size: large;text-align: center;">**Before Filling in the Form make sure you
                Understood the Instuctions or go Back to Dashboard Tab**</p>
            <form action="{{ route('storereport')}}" method="post">
                @csrf
                @method('post')

                <label for="user_email" style="font-weight: bold;">Enter your user Email</label>
                <div class="col-md-6">
                    <input type="text" class="form-control @error('user_email') is-invalid @enderror" id="user_email"
                        name="user_email" value="{{ old('user_email') }}">
                    @if ($errors->has('user_email'))
                    <span class="text-danger">{{ $errors->first('user_email') }}</span>
                    @endif
                </div>
                <br>
                <label for="startDate" style="font-weight: bold;">Start Date</label>
                <div class="col-md-6">
                    <input type="date" class="form-control @error('startDate') is-invalid @enderror" id="startDate"
                        name="startDate" value="{{ old('startDate') }}">
                    @if ($errors->has('startDate'))
                    <span class="text-danger">{{ $errors->first('startDate') }}</span>
                    @endif
                </div><br>
                <label for="endDate" style="font-weight: bold;">End Date</label>
                <div class="col-md-6">
                    <input type="date" class="form-control @error('endDate') is-invalid @enderror" id="endDate"
                        name="endDate" value="{{ old('endDate') }}">
                    @if ($errors->has('endDate'))
                    <span class="text-danger">{{ $errors->first('endDate') }}</span>
                    @endif
                </div><br>
                <label for="hours" style="font-weight: bold;">Enter Monthly Hours</label>
                <div class="col-md-6">
                    <input type="text" class="form-control @error('hours') is-invalid @enderror" id="hours" name="hours"
                        value="{{ old('hours') }}">
                    @if ($errors->has('hours'))
                    <span class="text-danger">{{ $errors->first('hours') }}</span>
                    @endif
                </div><br>
                <div>
                    <label for="taskDescrition" style="font-weight: bold;">Task Description</label>
                    <textarea type="text" class="form-control " id="taskDescrition" name="taskDescrition"></textarea>
                    @if ($errors->has('taskDescrition'))
                    <span class="text-danger">{{ $errors->first('taskDescrition') }}</span>
                    @endif
                </div>
                <div class="col-md-6"><br>
                    <label for="file" style="font-weight: bold;">Attach file as a proof of the activities
                        you have done</label>
                    <input type="text" class="form-control" id="file" name="file"></input>
                    <input type="file" name="file"><br>
                    <br>
                </div>
                <div>
                    <!-- <a href="{{route('back-admin')}}" class="btn btn-success"
                        style="background-color: #d6c66f;">Save</a> -->
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary"
                        style="float:right;background-color: #f58742;" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection