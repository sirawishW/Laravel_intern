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
        height: 105vh;
    "
    >
        <div class="card" style="width:auto">
            <div class="text-center text-uppercase pt-2">
                <h4>{{ $cuisine->nameEN }}</h4>
            </div>
            <div class="text-center pb-2">
                <h5>{{ $cuisine->nameTH }}</h5>
            </div>
            <img class="card-img-top" src="{{ asset('storage/images/cuisines/' .$cuisine->image) }}" height="360px">
            <div class="pt-3 text-center">
                Nationality: {{ $cuisine->nationality }}
            </div>
            <div class="pt-3 container" style="width: 360px;">
                Description: {{ $cuisine->description }}
            </div>
            @if(Auth::user())
            <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                <a href="/home">
                    <button type="button" id="homeBtn" class="btn btn-dark rounded-pill">
                        Home
                    </button>
                </a>
                <a href="/cuisines">
                    <button type="button" id="backBtn" class="btn btn-dark rounded-pill ms-2">
                        Back
                    </button>
                </a>
            </div>
            @else
            <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                <a href="/">
                    <button type="button" id="homeBtn" class="btn btn-dark rounded-pill">
                        Home
                    </button>
                </a>
                <a href="/cuisines">
                    <button type="button" id="backBtn" class="btn btn-dark rounded-pill ms-2">
                        Back
                    </button>
                </a>
            </div>
            @endif
        </div>
    </div>
</body>
</html>