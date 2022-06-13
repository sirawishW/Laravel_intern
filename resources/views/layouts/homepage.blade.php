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
    <div
    class="bg-image d-flex justify-content-center align-items-center"
    style="
        background-image: url('/images/food2.jpg');
        height: 93vh;
    "
    >
        <div class="container-fluid">
            <div class="row d-flex ps-5">
                <div class="card mt-4" style="border-radius: 0.5rem; width: 30rem;">
                    <h1 class='container text-center pt-5 fw-bold'>Eatomizer</h1>
                    <div class='fw-normal text-center pt-3' style="letter-spacing: 1px;">
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
                <div class="col-sm-9 col-md-6 col-lg-8">
                    <div class="card mt-4" style="border-radius: 0.5rem; width: 60rem; height: 35rem">
                        <div class='fw-normal text-center pt-4' style="letter-spacing: 2px;">
                            Which cuisine you'll get?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>

</script>