@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <a href="{{route('admin-mentor')}}">BACK</a>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="text-align: center;">Create a New Mentor</div>
            <div class="card-body">
                <form action="{{ route('storementor')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="surname" class="col-md-4 col-form-label text-md-end text-start">Surname</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname"
                                name="surname" value="{{ old('surname') }}">
                            @if ($errors->has('surname'))
                            <span class="text-danger">{{ $errors->first('surname') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="perselNo" class="col-md-4 col-form-label text-md-end text-start">Persel
                            Number</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('perselNo') is-invalid @enderror"
                                id="perselNo" name="perselNo" value="{{ old('perselNo') }}">
                            @if ($errors->has('perselNo'))
                            <span class="text-danger">{{ $errors->first('perselNo') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="year" class="col-md-4 col-form-label text-md-end text-start">Year</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('year') is-invalid @enderror" id="year"
                                name="year" value="{{ old('year') }}">
                            @if ($errors->has('year'))
                            <span class="text-danger">{{ $errors->first('year') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary"
                            style="background-color: #f58742;" value=" Add New Mentor">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection