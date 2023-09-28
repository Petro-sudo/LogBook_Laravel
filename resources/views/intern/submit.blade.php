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
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="av-item nav-link active" href="{{route('dashboard')}}">Dashboard </a>
                    <a class="nav-item nav-link" href="{{route('internProfile')}}">Profile</a>
                    <a class="nav-item nav-link" href="{{route('createReport')}}">Create Report </a>
                    <a class="nav-item nav-link" href="{{route('saveReport')}}">Edit Reports</a>
                    <a class="nav-item nav-link" href="{{route('submitreport')}}">View and Submit Reports</a>
                    <a class="nav-item nav-link" href="{{route('internReport')}}">Report</a>
                    <a class="nav-item nav-link" href="">View Mentors Remark</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="row justify-content-center mt-5">
        <div class="card">
            <p class="card-header" style="text-align: center; font-weight: bold;">{{Auth::user()->name}}'s Profile</p>

            <form method="post" action="">
                @foreach ($user as $users)
                <div class="card-body">
                    @csrf
                    @method('post')
                    <br>
                    <p style="font-size: large;">Name and Surname: {{ $users->name }} {{ $users->surname }}
                    </p>
                    <p style="font-size: large;">Email: {{ $users->email }}</p>
                    <p style="font-size: large;">Persel: {{ $users->perselNo }}</p>
                    <p style="font-size: large;">ID Number: {{ $users->internID }}</p>

                    <p style="font-size: large;">Contact Number:
                        {{ $users->internNumber }}</p>
                    <p class="card-header" style="text-align: center; font-weight: bold;">Mentor's Details</p>
                    <br>
                    <p style="font-weight: bold;font-size: large;">Name and Surname:
                        {{ $users->mentorName }}</p>
                    <p style="font-weight: bold;font-size: large;">Contact Number:
                        {{ $users->mentorNumber }}</p>

                    <p class="card-header" style="text-align: center; font-weight: bold;">{{ $users->name }}'s Report
                    </p>
                    <br>
                    <p style="font-size: large; font-weight: bold;border-bottom:1ch ">Start Date</p>
                    <p style="font-size: large;border-bottom: 1px solid;">From: {{ $users->startDate }}</p>
                    <p style="font-size: large;font-weight: bold;">End Date</p>
                    <p style="font-size: large;border-bottom: 1px solid;">To: {{ $users->endDate }}</p>
                    <p style="font-size: large;font-weight: bold;">Total Hours Works </p>
                    <p style="font-size: large;border-bottom: 1px solid;"> {{ $users->hours }} Hours</p>
                    <p style="font-size: large;font-weight: bold;">Task Describtion</p>
                    <pre style="font-size: large;border-bottom: 1px solid;">{{ $users->taskDescrition }}</pre>


                </div>

                @endforeach
            </form>
        </div>
    </div>
</body>

</html>
<div>

</div>