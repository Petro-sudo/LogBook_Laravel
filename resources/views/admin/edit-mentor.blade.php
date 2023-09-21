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
        <a href="{{route('admin-mentor')}}">BACK</a>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    Edit Mentor
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('updatementor',['mentor'=> $mentor])}}">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label for="fname" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('fname') is-invalid @enderror" id="fname"
                                    name="fname" value="{{$mentor->fname}}">
                                @if ($errors->has('fname'))
                                <span class="text-danger">{{ $errors->first('fname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="lname" class="col-md-4 col-form-label text-md-end text-start">Surname</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('lname') is-invalid @enderror" id="lname"
                                    name="lname" value="{{$mentor->lname}}">
                                @if ($errors->has('lname'))
                                <span class="text-danger">{{ $errors->first('lname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="perselN" class="col-md-4 col-form-label text-md-end text-start">Persel
                                Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('perselN') is-invalid @enderror"
                                    id="perselN" name="perselN" value="{{ $mentor->perselN }}">
                                @if ($errors->has('perselN'))
                                <span class="text-danger">{{ $errors->first('perselN') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="emailMentor" class="col-md-4 col-form-label text-md-end text-start">Email
                                Address</label>
                            <div class="col-md-6">
                                <label for="emailMentor" class="col-md-4 col-form-label text-md-end text-start">
                                    {{ $mentor->emailMentor}}</label>
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
</body>

</html>