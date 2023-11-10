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
    <div class="row justify-content-center mt-5">
    <div class="col-md-6">
    <a href="{{route('viewreport')}}">BACK</a>
        <div class="card">
            <p class="card-header" style="text-align: center; font-weight: bold;">View Report</p>

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

                    <p class="card-header" style="text-align: center; font-weight: bold;">From:  {{ $users->startDate }} To: {{ $users->endDate }}
                    </p>
                    <br>
                    <p style="font-size: large; font-weight: bold;border-bottom:1ch ">Start and End Date</p>
                    <p style="font-size: large;border-bottom: 1px solid;">From:  {{ $users->startDate }} *** End Date  To: {{ $users->endDate }}</p>
                    <p style="font-size: large;font-weight: bold;">Total Hours Works </p>
                    <p style="font-size: large;border-bottom: 1px solid;"> {{ $users->hours }} Hours</p>
                    <p style="font-size: large;font-weight: bold;">Task Describtion</p>
                    <pre style="font-size: large;border-bottom: 1px solid;">{{ $users->taskDescrition }}</pre>
                </div>

                @endforeach
            </form>
        </div>
        </div>
    </div>
</body>

</html>
<div>

</div>