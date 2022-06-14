<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eatomizer</title>
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
                <div class="card mt-4 d-flex" style="border-radius: 0.5rem; width: 30rem;">
                    <h1 class='container text-center pt-5 fw-bold'>Eatomizer</h1>
                    <div class='fw-normal text-center pt-3' style="letter-spacing: 1px;">
                        Don't know what to eat? , let us decide it for you
                    </div>
                    <div class="ms-4 mb-2 mt-3">
                        <label class="form-label" for="form2Example18">Name(English)</label>
                        <input type="name" id="nameEN" class="form-inline ms-2" style="border-radius: 0.5rem; width: 15rem;"/>
                    </div>
                    <div class="ms-4 mb-2 mt-3">
                        <label class="form-label" for="form2Example28">Name(Thai)</label>
                        <input type="name" id="nameTH" class="form-inline ms-4" style="border-radius: 0.5rem; width: 15rem;"/>
                    </div>
                    <div class="ms-4 mb-2 mt-3">
                        <label class="form-label" for="form2Example28">Nationality</label>
                        <input type="name" id="nameTH" class="form-inline ms-4" style="border-radius: 0.5rem; width: 15rem;"/>
                    </div>
                    <div class="ms-4 mb-2 mt-3">
                        <label class="form-label" for="form2Example28">Description</label>
                        <input type="name" id="nameTH" class="form-inline ms-4" style="border-radius: 0.5rem; width: 15rem;"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-center pt-5 pb-5 mt-auto" style="height: 50px;">
                        <button type="button" id="allCuisineBtn" class="btn btn-dark rounded-pill" onclick="window.location.href='/cuisines'">
                            All Menu
                        </button>
                        <button type="button" id="addBtn" class="btn btn-dark rounded-pill ms-2">
                            Add
                        </button>
                    </div>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-8">
                    <div class="card mt-4 d-flex" style="border-radius: 0.5rem; width: 60rem; height: 40rem">
                        <div class='fw-normal text-center pt-4' style="letter-spacing: 2px;">
                            Which menu you'll get?
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-auto" style="height: 50px;">
                            <button type="button" id="randomBtn" class="btn btn-dark rounded-pill mb-5">
                                <a href="/random" class="text-white" style="text-decoration:none;">Random</a>
                            </button>
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