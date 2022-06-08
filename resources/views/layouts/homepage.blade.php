<!doctype html>
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
    <h1 class='container text-center'>Eatomizer</h1>
    <div class='container text-center'>
        Don't know what to eat? , let us decide it for you
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height: 50px;">
        <button type="button" id="randomBtn" class="btn btn-dark rounded-pill">Random</button>
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height: 50px;">
        <button type="button" id="addBtn" class="btn btn-dark rounded-pill">
            Add
        </button>
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height: 50px;">
        <button type="button" id="allCuisineBtn" class="btn btn-dark rounded-pill">
            <a href="{{ route('cuisines.index') }}" class="text-white">All Cuisine</a>
        </button>
    </div>
</body>
</html>
<script>

</script>