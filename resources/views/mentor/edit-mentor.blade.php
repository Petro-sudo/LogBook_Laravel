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
        <div class="col-md-5">
        <a href="{{route('mentorProfile')}}">BACK</a>
            <div class="card">
                <div class="card-header" style="text-align: center">
                    Edit Your Profile
                </div>
                <div class="card-body" style="text-align: left;">
                    <form method="post" action="{{route('updatementorprofile', ['user'=>$user])}}">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-start text-start">Email
                                Address</label>
                            <div class="col-md-8">
                                <label for="email" class="col-md-4 col-form-label text-md-start text-start">
                                    {{ $user->email}}</label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-start text-start">Name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{$user->name}}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="surname"
                                class="col-md-4 col-form-label text-md-start text-start">Surname</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control @error('surname') is-invalid @enderror"
                                    id="surname" name="surname" value="{{$user->surname}}">
                                @if ($errors->has('surname'))
                                <span class="text-danger">{{ $errors->first('surname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="perselNo" class="col-md-4 col-form-label text-md-start text-start">Persel
                                Number</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control @error('perselNo') is-invalid @enderror"
                                    id="perselNo" name="perselNo" value="{{ $user->perselNo }}">
                                @if ($errors->has('perselNo'))
                                <span class="text-danger">{{ $errors->first('perselNo') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                    <label for="mentorNumber" class="col-md-4 col-form-label text-md-start text-start">Contact
                        Number</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control @error('mentorNumber') is-invalid @enderror"
                            id="mentorNumber" name="mentorNumber" value="{{ $user->mentorNumber }}">
                        @if ($errors->has('mentorNumber'))
                        <span class="text-danger">{{ $errors->first('mentorNumber') }}</span>
                        @endif
                    </div>
                </div>
                </div>
                
               

                <div class="mb-3 row">
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" style="background-color: #85603d;"
                        value="Update"/>
                </div>

                </form>
             </div>
          </div>
       </div>
    </div>
</body>

</html>