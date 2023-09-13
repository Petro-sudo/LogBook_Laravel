@extends('auth.layouts')

@section('content')

<div class="container">
    <a href="{{route('back-admin')}}">BACK</a>
    <div class="row justify-content-center">
        <form class="form-inline my-2 my-ls-0" type="get" action="{{route('searchintern')}}">
            <div class="d-flex justify-content-left">
                <div class="input-group w-auto">
                    <input class="form-control" name="search" type="search" placeholder="Search">
                    <button class="btn btn-warning" type="submit">Search</button>
                </div>
            </div>
        </form>
        <div class="card">
            <p class="card-header" style="text-align: center; font-weight: bold;">INTERNS </p>
            @include('sweetalert::alert')
            <div class="card-body" style="text-align: center;">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <tr>
                        <th>NAME</th>
                        <th>SURNAME</th>
                        <th>PERSEL-NUMBER</th>
                        <th>EMAIL-ADDRESS</th>
                    </tr>

                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->perselNo }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection