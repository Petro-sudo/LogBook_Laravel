@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div>
        <a href="{{route('back-admin')}}">BACK</a>
        <a href="{{route('create-mentor')}}" class="btn btn-success" style="float:right;background-color: #d6c66f;">View
            Profile</a>
    </div>
    <br>
    <div class="card">
        <div class="card-header" style="text-align: center;">Hi Intern {{Auth::user()->name}}
            {{Auth::user()->surname}} </div>
        <div class="card-body">
            <p style="font-weight: bold;font-size: large;">-On this page you need to fill in all your
                monthky tasks as followers:
            <p style="font-weight: bold;font-size: large;">-Date:Monthly</p>
            <p style="font-weight: bold;font-size: large;">-Hours Worked: Monthly</p>
            <p style="font-weight: bold;font-size: large;">-On your Task Description field you need to fill
                it as followers for example:</p>
            <p style="font-weight: bold;font-size: large;">Day (Monday-Friday)</p>
            <p> +05/June/2023 - 09/June/2023</p>
            <p style="font-weight: bold;font-size: large;"> Task Given</p>
            <p> + NLTS Training (RAS & NTS)</p>
            <p style="font-weight: bold;font-size: large;">Task Description </p>
            <p> + I attended a training where and I was taught
                about Registration Administration System (RAS) and National Transport Route (NTR).
                On RAS I have learned on how to create associations, association members, update their
                status and their information using the NLTISystem.
                On NTS I have learned on how to register routes that the associations will be using.
            </p>
            <p style="font-weight: bold;font-size: large;">Lastly Attach proof or attandnce</p>
            <p style="font-weight: bold;font-size: large;">Monthly</p>
            <form action="" method="post">
                @csrf
                <label for="startDate" style="font-weight: bold;">Start Date</label>
                <div class="col-md-6">
                    <input type="date" class="form-control " id="startDate" name="startDate"
                        value="{{ old('startDate') }}">
                </div><br>
                <label for="endDate" style="font-weight: bold;">End Date</label>
                <div class="col-md-6">
                    <input type="date" class="form-control " id="endDate" name="endDate" value="{{ old('endDate') }}">
                </div><br>
                <label for="hours" style="font-weight: bold;">Enter Monthly Hours</label>
                <div class="col-md-6">
                    <input type="text" class="form-control " id="hours" name="hours" value="{{ old('hours') }}">
                </div><br>
                <label for="task_description" style="font-weight: bold;">Task Description</label>
                <textarea type="text" class="form-control" id="task_description" name="task_description"></textarea>
                <div class="col-md-6"><br>
                    <label for="file" style="font-weight: bold;">Attach file as a proof of the activities
                        you have done</label>
                    <input type="text" class="form-control" id="file" name="file" required></input>
                    <input type="file" name="file"><br>
                    <br>
                </div>

                <div>
                    <a href="{{route('back-admin')}}" class="btn btn-success"
                        style="background-color: #d6c66f;">Save</a>
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary"
                        style="float:right;background-color: #f58742;" value="Submit">
                </div>

            </form>
        </div>
    </div>
</div>

@endsection