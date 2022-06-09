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
    <div class='container text-center'>
        <h1>{{ $cuisine->nameTH }}</h1>
    </div>
    <div class='container text-center'>
        <h1>{{ $cuisine->nameEN }}</h1>
    </div>
    <div class='container text-center'>
        <img src="{{ $cuisine->path }}">
    </div>
    <div class='container text-center'>
        {{ $cuisine->description }}
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
            <button type="button" id="homeBtn" class="btn btn-dark rounded-pill">
                <a class="text-white">Home</a>
            </button>
        </div>
</body>
</html>