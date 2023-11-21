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
    <div class="col-md-4">
    <a href="{{route('viewreport')}}">BACK</a>
        <div class="card" tyle="text-align: center;">
            <p class="card-header" style="text-align: center; font-weight: bold;">{{Auth::user()->name}} Sumbits Or View
                Reports</p>
            @include('sweetalert::alert')
            <div class="card-body" style="text-align: center;">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <tr>
                        <th>Select Date To Edit</th>
                    </tr>
                    @foreach ($reports as $report)
                    <tr>
                        <td>
                            <a href="{{route('reportview',[($report->user_id)])}}">{{$report->startDate}} :
                                {{$report->endDate}}</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>  
</body>

</html>