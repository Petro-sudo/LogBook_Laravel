@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <a href="{{route('admin-mentor')}}">BACK</a>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="text-align: center">
                Edit Mentor
            </div>
            <div class="card-body">
                <form action=" " method="post">
                    {{ @csrf_field() }}
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" name="name" value="{{$mentor->name}}" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="surname" class="col-md-4 col-form-label text-md-end text-start">Surname</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="surname" name="surname"
                                value="{{$mentor->surname}}" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="perselNo" class="col-md-4 col-form-label text-md-end text-start">Persel
                            Number</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="perselNo" name="perselNo"
                                value="{{$mentor->perselNo}}" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{$mentor->email}}" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary"
                            style="background-color: #85603d;" value="Update" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection