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
                        <label for="fname" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('fname') is-invalid @enderror" id="fname"
                                name="fname" value="{{ old('fname') }}">
                            @if ($errors->has('fname'))
                            <span class="text-danger">{{ $errors->first('fname') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lname" class="col-md-4 col-form-label text-md-end text-start">Surname</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('lname') is-invalid @enderror" id="lname"
                                name="lname" value="{{ old('lname') }}">
                            @if ($errors->has('lname'))
                            <span class="text-danger">{{ $errors->first('lname') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="perselN" class="col-md-4 col-form-label text-md-end text-start">Persel
                            Number</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('perselN') is-invalid @enderror" id="perselN"
                                name="perselN" value="{{ old('perselN') }}">
                            @if ($errors->has('perselN'))
                            <span class="text-danger">{{ $errors->first('perselN') }}</span>
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
                        <label for="emailMentor" class="col-md-4 col-form-label text-md-end text-start">Email
                            Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('emailMentor') is-invalid @enderror"
                                id="emailMentor" name="emailMentor" value="{{ old('emailMentor') }}">
                            @if ($errors->has('emailMentor'))
                            <span class="text-danger">{{ $errors->first('emailMentor') }}</span>
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