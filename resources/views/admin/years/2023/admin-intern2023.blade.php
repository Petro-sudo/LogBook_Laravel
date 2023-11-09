@extends('auth.layouts')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="av-item nav-link active" href="{{route('dashboard')}}">Dashboard </a>
            <a class="nav-item nav-link" href="{{route('admin-intern2023')}}">2023 Interns</a>
            <a class="nav-item nav-link" href="">2024 Interns</a>

        </div>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <p class="card-header" style="text-align: center; font-weight: bold;">2023 INTERNS </p>
            <div class="card-body" style="text-align: center;">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <tr>
                        <th>NAME</th>
                        <th>SURNAME</th>
                        <th>PERSEL-NUMBER</th>
                        <th>EMAIL-ADDRESS</th>
                        <th>REPORTS</th>
                    </tr>

                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->perselNo }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="">View Reports</a>
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