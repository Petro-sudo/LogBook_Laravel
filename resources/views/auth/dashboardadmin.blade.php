@extends('auth.layouts')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">Hi Admin {{Auth::user()->name}}
                    {{Auth::user()->surname}} </div>
                <div class="card-body" style="text-align: center;">

                    <button onclick="window.location.href='{{route('admin-admin')}}'" class="btn btn-danger btn-block"
                        style="background-color: #f58742;">Admin
                        <?php echo date("Y"); ?>
                    </button>
                    <br><br>
                    <button onclick="window.location.href='{{route('admin-intern')}}'" class="btn btn-primary btn-block"
                        style="background-color: #d6c66f;">Intern
                        <?php echo date("Y"); ?>
                    </button>
                    <br><br>
                    <button onclick="window.location.href='{{route('admin-mentor')}}'"
                        class="btn btn-secondary btn-block" style="background-color: #85603d;">Mentor
                        <?php echo date("Y"); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection