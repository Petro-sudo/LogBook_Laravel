@extends('auth.layouts')

@section('content')

<div class="container">
    <a href="{{route('back-admin')}}">BACK</a>
    <div class="row justify-content-center">
        <div class="card">
            <p class="card-header" style="text-align: center; font-weight: bold;"><?php echo date("Y"); ?> INTERNS </p>
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
@endsection