<html lang="en">

<head>
    <title>IMRS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<br><br>

<body>
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
                <a class="nav-item nav-link" href="{{route('saveReport')}}">Saved Reports</a>
                <a class="nav-item nav-link" href="{{route('internReport')}}">Report</a>
            </div>
        </div>
    </nav>
    <div class="row justify-content-center mt-5">
        <div class="card">
            <div class="card-header" style="text-align: center;"> Edit From {{$report->startDate}} To
                {{$report->endDate}}</div>
            <div class="card-body">
                <p style="font-weight: bold;font-size: large;text-align: center;">**Before Filling in the Form make sure
                    you
                    Understood the Instuctions or go Back to Dashboard Tab**</p>

                <form action="" method="post">

                    @csrf
                    @method('put')
                    <label for="startDate" style="font-weight: bold;">Start Date</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control @error('startDate') is-invalid @enderror" id="startDate"
                            name="startDate" value="{{$report->startDate}}">
                        @if ($errors->has('startDate'))
                        <span class="text-danger">{{ $errors->first('startDate') }}</span>
                        @endif
                    </div><br>
                    <label for=" endDate" style="font-weight: bold;">End Date</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control @error('endDate') is-invalid @enderror" id="endDate"
                            name="endDate" value="{{$report->endDate}}">
                        @if ($errors->has('endDate'))
                        <span class="text-danger">{{ $errors->first('endDate') }}</span>
                        @endif
                    </div><br>
                    <label for="hours" style="font-weight: bold;">Enter Monthly Hours</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control @error('hours') is-invalid @enderror" id="hours"
                            name="hours" value="{{$report->hours}}">
                        @if ($errors->has('hours'))
                        <span class="text-danger">{{ $errors->first('hours') }}</span>
                        @endif
                    </div><br>
                    <label for="taskDescrition" style="font-weight: bold;">Task Description</label>
                    <textarea type="text" class="form-control" id="taskDescrition" name="taskDescrition"
                        value="{{$report->taskDescrition}}">></textarea>
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
</body>

</html>