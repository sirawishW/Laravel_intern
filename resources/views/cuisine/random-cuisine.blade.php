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
    <div class="bg-image d-flex justify-content-center align-items-center" style="
        background-image: url('/images/food2.jpg');
        height: 105vh;
    ">
        <div class="card" style="width:auto">
            @foreach($random as $index)
            <div class='fw-normal text-center text-uppercase pt-1' style="letter-spacing: 2px;">
                This is your menu
            </div>
            <img class="card-img-top" src="{{ asset('storage/images/cuisines/' .$index->image) }}" style="height: 360px;" alt="Image">
            <div class='fw-normal text-center text-uppercase pt-3'>
                <h4>{{ $index->nameEN }}</h4>
            </div>
            <div class='fw-normal text-center pt-1'>
                <h5>{{ $index-> nameTH }}</h5>
            </div>
            <div class='fw-normal text-center pt-1'>
                Nationality: {{ $index-> nationality}}
            </div>
            <div class='fw-normal pt-2 ps-2 container' style="width: 360px;">
                Description: {{ $index-> description}}
            </div>
            @endforeach
            <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                <a href="/random">
                    <button type="button" id="randomBtn" class="btn btn-dark rounded-pill">
                        Random
                    </button>
                </a>
                @if(Auth::user())
                <a href="/home">
                    <button type="button" id="userBackBtn" class="btn btn-dark rounded-pill ms-2">
                        Back
                    </button>
                </a>
                @else
                <a href="/">
                    <button type="button" id="BackBtn" class="btn btn-dark rounded-pill ms-2">
                        Back
                    </button>
                </a>
                @endif
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
<script>
</script>