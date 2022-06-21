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
    @if(Auth::user())
        @if(Auth::user()->role == 'ADMIN')
        <div class="container">
            <div class="row d-flex">
                <div class="card d-flex" style="border-radius: 0.5rem; height: 40rem;">
                    <h1 class="pt-3 ps-2">Admin {{ Auth::user()->name }}, dashboard </h1>
                    <div>
                        <table class="table border-grey-200">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Name(TH)</th>
                                    <th>Name(EN)</th>
                                    <th>Nationality</th>
                                    <th>Description</th>
                                    <th>Request type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Username
                                    </td>
                                    <td>
                                        Name(TH)
                                    </td>
                                    <td>
                                        Name(EN)
                                    </td>
                                    <td>
                                        Nationality
                                    </td>
                                    <td>
                                        Description
                                    </td>
                                    <td>
                                        Request type
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="text-white">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="container-fluid">
                <div class="row d-flex ps-5">
                    <div class="card mt-2 d-flex" style="border-radius: 0.5rem; width: 30rem;">
                        <h1 class='container text-center pt-5 fw-bold'>Eatomizer</h1>
                        <div class='fw-normal text-center pt-3' style="letter-spacing: 1px;">
                            Don't know what to eat? , let us decide it for you
                        </div>
                        <div class="col-xs-8 col-sm-6 ms-5">
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <label class="form-label" for="nameEN">Name(English)</label>
                                <input type="name" id="nameEN" class="form-inline" style="border-radius: 0.5rem; width: 15rem;"/>
                            </div>
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <label class="form-label" for="nameTH">Name(Thai)</label>
                                <input type="name" id="nameTH" class="form-inline" style="border-radius: 0.5rem; width: 15rem;"/>
                            </div>
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <label class="form-label" for="nationality">Nationality</label>
                                <select class="form-select form-select-sm form-select-border-width: ">
                                    @foreach($nationalities as $nationality)
                                        <option value="{{ $nationality->id }}">{{ $nationality->nation }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <label class="form-label" for="description">Description</label>
                                <input type="name" id="description" class="form-inline" style="border-radius: 0.5rem; width: 15rem; height: 5rem"/>
                            </div>
                            <div class="form-outline ms-5 mb-2 mt-3">
                                <input type="file" id="img" name="img" accept="image/*">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pt-5 pb-5 mt-auto" style="height: 50px;">
                            <button type="button" id="allCuisineBtn" class="btn btn-dark rounded-pill" onclick="window.location.href='/cuisines'">
                                All Menu
                            </button>
                            <button type="button" id="summit" class="btn btn-dark rounded-pill ms-2">
                                Add
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-6 col-lg-8">
                        <div class="card mt-2 d-flex" style="border-radius: 0.5rem; width: 60rem; height: 40rem">
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
        @endif
    @else
    <div class="container-fluid">
            <div class="row d-flex ps-5">
                <div class="card mt-2 d-flex" style="border-radius: 0.5rem; width: 30rem;">
                    <h1 class='container text-center pt-5 fw-bold'>Eatomizer</h1>
                    <div class='fw-normal text-center pt-3' style="letter-spacing: 1px;">
                        Don't know what to eat? , let us decide it for you
                    </div>
                    <div class="d-flex align-items-center justify-content-center pt-5 pb-5 mt-auto" style="height: 50px;">
                        <button type="button" id="allCuisineBtn" class="btn btn-dark rounded-pill" onclick="window.location.href='/cuisines'">
                            All Menu
                        </button>
                    </div>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-8">
                    <div class="card mt-2 d-flex" style="border-radius: 0.5rem; width: 60rem; height: 40rem">
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
    @endif
</body>
</html>
<script>
</script>