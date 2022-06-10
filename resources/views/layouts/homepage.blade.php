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
    <div class="row d-flex ps-5">
        <div class="card mt-4" style="border-radius: 0.5rem; width: 27rem;">
            <h1 class='container text-center pt-5'>Eatomizer</h1>
            <div class='container text-center'>
                Don't know what to eat? , let us decide it for you
            </div>
            
            <div class="d-flex align-items-center justify-content-center pt-5 pb-5" style="height: 50px;">
                <button type="button" id="randomBtn" class="btn btn-dark rounded-pill">
                    Random
                </button>
            </div>
            <div class="d-flex align-items-center justify-content-center pt-5 pb-5" style="height: 50px;">
                <button type="button" id="addBtn" class="btn btn-dark rounded-pill">
                    Add
                </button>
            </div>
            <div class="d-flex align-items-center justify-content-center pt-5 pb-5" style="height: 50px;">
                <button type="button" id="allCuisineBtn" class="btn btn-dark rounded-pill">
                    <a href="{{ route('cuisines.index') }}" class="text-white" style="text-decoration:none">All Cuisine</a>
                </button>
            </div>
            <br>
        </div>
    </div>
</body>
</html>
<script>

</script>