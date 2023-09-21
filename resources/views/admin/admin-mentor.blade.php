@extends('auth.layouts')

@section('content')

<div class="container">
    <div>
        <a href="{{route('back-admin')}}">BACK</a>
        <a href="{{route('create-mentor')}}" class="btn btn-success" style="float:right;background-color: #d6c66f;">Add
            New Mentor</a>
    </div>
    @include('sweetalert::alert')
    <br>
    <div class="row justify-content-center">
        <form class="form-inline my-2 my-ls-0" type="get" action="{{route('searchmentor')}}">
            <div class="d-flex justify-content-left">
                <div class="input-group w-auto">
                    <input class="form-control" name="search" type="search" placeholder="Search">
                    <button class="btn btn-warning" type="submit">Search</button>
                </div>
            </div>
        </form>
        <div class="card">
            <p class="card-header" style="text-align: center; font-weight: bold;"><?php echo date("Y"); ?> MENTORS </p>
            <div class="card-body" style="text-align: center;">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>SURNAME</th>
                        <th>PERSEL-NUMBER</th>
                        <th>EMAIL-ADDRESS</th>
                        <th>EDIT</th>
                    </tr>

                    @foreach($mentors as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->fname }}</td>
                        <td>{{ $user->lname }}</td>
                        <td>{{ $user->perselN }}</td>
                        <td>{{ $user->emailMentor }}</td>
                        <td>
                            <a href="{{route('editmentor',['mentor'=> $user])}}">Edit</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection