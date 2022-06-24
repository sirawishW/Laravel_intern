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
        <div class="card container text-center mt-4">
            <div>
                <h1 class="pt-4">{{ $pendingCuisine->nameEN }}</h1>
            </div>
            <div>
                <h1>{{ $pendingCuisine->nameTH }}</h1>
            </div>
            <div>
                <img src="{{ asset('storage/images/cuisines/' .$pendingCuisine->image) }}" height="360px">
            </div>
            <div class="pt-3">
                Nationality: {{ $pendingCuisine->nationality }}
            </div>
            <div class="pt-3">
                Description: {{ $pendingCuisine->description }}
            </div>
            <div class="pt-3">
                Request user: {{ $pendingCuisine->user }}
            </div>
            <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                <a href="/home">
                    <button type="button" id="homeBtn" class="btn btn-dark rounded-pill">
                        Home
                    </button>
                </a>
                <form method="POST" action="{{ route('cuisine.approve', $pendingCuisine->id) }}">
                    @csrf
                    <button type="summit" id="homeBtn" class="btn btn-dark rounded-pill ms-2">
                        Approve
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>