<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eatomizer</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    @include('layouts.nav-bar')
    @if(session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
    @endif
    <div class="bg-image d-flex justify-content-center align-items-center" style="
        background-image: url('/images/food2.jpg');
        height: 105vh;
    ">
        @if(Auth::user())
        @if(Auth::user()->role == 'USER')
        <div class="container-fluid">
            <div class="row d-flex ps-5">
                <div class="card mt-2 d-flex" style="border-radius: 0.5rem; width: 30rem;">
                    <h1 class='container text-center pt-5 fw-bold'>Eatomizer</h1>
                    <div class='fw-normal text-center pt-3' style="letter-spacing: 1px;">
                        Don't know what to eat? , let us decide it for you
                    </div>
                    <form method="POST" action="{{ route('cuisine.add') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-outline col-xs-8 col-sm-6 ms-5">
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <label class="form-label" for="nameEN">Name(English)</label>
                                <input type="text" id="nameEN" name="nameEN" value="{{ old('nameEN') }}" class="form-inline @error('nameEN') is-invalid @enderror" style="border-radius: 0.5rem; width: 15rem;" />
                                @error('nameEN')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <label class="form-label" for="nameTH">Name(Thai)</label>
                                <input type="text" id="nameTH" name="nameTH" value="{{ old('nameTH') }}" class="form-inline @error('nameTH') is-invalid @enderror" style="border-radius: 0.5rem; width: 15rem;" />
                                @error('nameTH')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <label class="form-label" for="nationality">Nationality</label>
                                <select class="form-select form-select-sm form-select-border-width: " name="nationality">
                                    @foreach($nationalities as $nationality)
                                    <option value="{{ $nationality->nation }}">{{ $nationality->nation }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <label class="form-label" for="description">Description</label>
                                <input type="text" id="description" name="description" value="{{ old('description') }}" class="form-inline @error('nameTH') is-invalid @enderror" style="border-radius: 0.5rem; width: 15rem; height: 5rem" />
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <input type="file" id="image" name="image" accept="image/*" value="{{ old('image') }}" class="form-inline @error('image') is-invalid @enderror">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pt-5 pb-5 mt-auto" style="height: 50px;">
                            <a href="/cuisines">
                                <button type="button" id="allCuisineBtn" class="btn btn-dark rounded-pill">
                                    All Menu
                                </button>
                            </a>
                            <button type="summit" id="addBtn" class="btn btn-dark rounded-pill ms-2">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-8">
                    <div class="card mt-2 d-flex" style="border-radius: 0.5rem; width: 60rem; height: 41rem">
                        <div class='fw-normal text-center pt-4' style="letter-spacing: 2px;">
                            Which menu you'll get?
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-auto" style="height: 50px;">
                            <a href="/random">
                                <button type="button" id="randomBtn" class="btn btn-dark rounded-pill mb-5">
                                    Random
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                @if(session()->has('message'))
                <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            session('message')
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endif
    @else
    <div class="container-fluid">
        <div class="row d-flex ps-5">
            <div class="card mt-2 d-flex" style="border-radius: 0.5rem; width: 30rem;">
                <h1 class='container text-center pt-5 fw-bold'>Eatomizer</h1>
                <div class='fw-normal text-center pt-3' style="letter-spacing: 1px;">
                    Don't know what to eat? , let us decide it for you
                </div>
                <div class="d-flex align-items-center justify-content-center pt-5 pb-5 mt-auto" style="height: 50px;">
                    <button type="button" id="allCuisineBtn" class="btn btn-dark rounded-pill" onclick="window.location.href='/cuisines'">
                        All Menu
                    </button>
                </div>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-8">
                <div class="card mt-2 d-flex" style="border-radius: 0.5rem; width: 60rem; height: 40rem">
                    <div class='fw-normal text-center pt-4' style="letter-spacing: 2px;">
                        Which menu you'll get?
                    </div>
                    <div class="d-flex align-items-center justify-content-center mt-auto" style="height: 50px;">
                        <a href="/random">
                            <button type="button" id="randomBtn" class="btn btn-dark rounded-pill mb-5">
                                Random
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endif
</body>

</html>