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
    <div class='container text-center'>
        <h1>
            Eatomizer
        </h1>
    </div>
    <div class='container text-center'>
        Don't know what to eat? , let us decide it for you
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height: 50px;">
        <button type="button" id="randomBtn" class="btn btn-primary rounded-pill">Random</button>
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height: 50px;">
        <button type="button" id="randomBtn" class="btn btn-primary rounded-pill">
            Add
        </button>
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height: 50px;">
        <button type="button" id="randomBtn" class="btn btn-primary rounded-pill">
            <a href="{{ route('cuisine.index') }}" class="text-white">All Cuisine</a>
        </button>
    </div>
</body>
</html>
<script>

</script>