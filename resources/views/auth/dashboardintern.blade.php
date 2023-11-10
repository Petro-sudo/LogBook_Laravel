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
            <a class="nav-item nav-link" href="{{route('internProfile')}}">Profile</a>
            <a class="nav-item nav-link" href="{{route('createReport')}}">Create Report </a>
            <a class="nav-item nav-link" href="{{route('saveReport')}}">Edit Reports</a>
            <a class="nav-item nav-link" href="">View Mentors Remark</a>

        </div>
    </div>
</nav>
<div class="row justify-content-center mt-5">
    <div class="card">
        <div class="card-header" style="text-align: center;">Hi {{Auth::user()->name}}
            {{Auth::user()->surname}} Welcome to Department of Transport</div>
        <div class="card-body">
            <p style="font-weight: bold;font-size: large;text-align: center;">**Read the Instruction Carefully Before
                Filling in Your
                MONTHLY Duties**</p>
            <p style="font-weight: bold;font-size: large;">-You need to fill in all your
                monthky tasks as followers:</p>
            <p style="font-weight: bold;font-size: large;">-Date:Monthly</p>
            <p style="font-weight: bold;font-size: large;">-Hours Worked: Monthly</p>
            <p style="font-weight: bold;font-size: large;">-On your Task Description field you need to fill
                it as followers for example:</p>
            <p style="font-weight: bold;font-size: large;">Day (Monday-Friday)</p>
            <p> + 05/June/2023 - 09/June/2023</p>
            <p style="font-weight: bold;font-size: large;"> Task Given</p>
            <p> + NLTS Training (RAS & NTS)</p>
            <p style="font-weight: bold;font-size: large;">Task Description </p>
            <p> + I attended a training where and I was taught
                about Registration Administration System (RAS) and National Transport Route (NTR).
                On RAS I have learned on how to create associations, association members, update their
                status and their information using the NLTISystem.
                On NTS I have learned on how to register routes that the associations will be using.
            </p>
            <p style="font-weight: bold;font-size: large;">-"For Each and Every Week Save the Form, after filling in the
                form then. Locate the foem to
                'Saved Reports Tab', Edit the form, then Submit the form to your mentor for review then to HR at end of
                each and every Month"</p>
            <!-- <p style="font-weight: bold;font-size: large;">Lastly Attach Monthly proof of Attandnce</p> -->
            <p style="font-weight: bold;font-size: large;"></p>
        </div>
    </div>
</div>


@endsection