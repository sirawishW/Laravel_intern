<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @include('layouts.nav-bar')
    <div
    class="bg-image d-flex justify-content-center align-items-center"
    style="
        background-image: url('/images/food2.jpg');
        height: 93vh;
    "
    >
        <div class="card container text-center mt-4">
            <div>
                <h1 class="pt-4">{{ $cuisine->nameTH }}</h1>
            </div>
            <div>
                <h1>{{ $cuisine->nameEN }}</h1>
            </div>
            <div>
                <img src="{{ $cuisine->path }}">
            </div>
            <div class="pt-4">
                {{ $cuisine->description }}
            </div>
            @if(Auth::user())
            <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                <button type="button" id="homeBtn" class="btn btn-dark rounded-pill" onclick="window.location.href='/home'">
                    Home
                </button>
            </div>
            @else
            <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                <button type="button" id="homeBtn" class="btn btn-dark rounded-pill" onclick="window.location.href='/'">
                    Home
                </button>
            </div>
            @endif
        </div>
    </div>
</body>
</html>