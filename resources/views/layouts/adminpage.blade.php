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
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show position-absolute end-0">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif
    <div class="bg-image d-flex justify-content-center align-items-center" style="
        background-image: url('/images/food2.jpg');
        height: 105vh;
    ">
        <div class="container">
            <div class="row d-flex">
                <div class="card d-flex" style="border-radius: 0.5rem; height: 40rem;">
                    <div>
                        <h2 class="pt-3 ps-2">Admin {{ Auth::user()->name }}, dashboard </h2>
                         <div class="form-outline mt-3 mb-3 ps-2">
                            <form method="GET" action="/searchPending">
                                <input type="search" name="query" placeholder="Search User here" style="border-radius: 0.5rem; width: 15rem; height: 2.5rem">
                                <button value="summit" class="btn btn-dark rounded-pill ms-2">search</button>
                                <a href="/cuisines">
                                    <button type="button" id="allCuisineBtn" class="btn btn-dark rounded-pill ms-2">
                                        All Menu
                                    </button>
                                </a>
                            </form>
                        </div>
                    <div>
                        <table class="table border-grey-200">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Name(TH)</th>
                                    <th>Name(EN)</th>
                                    <th>Nationality</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pendingCuisines as $pendingCuisine)
                                <tr>
                                    <td>
                                        {{ $pendingCuisine->user }}
                                    </td>
                                    <td>
                                        <a href="{{ route('pendingCuisines.show', ['pendingCuisine' => $pendingCuisine->id]) }}" class="text-black">
                                            {{ $pendingCuisine->nameEN }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('pendingCuisines.show', ['pendingCuisine' => $pendingCuisine->id]) }}" class="text-black">
                                            {{ $pendingCuisine->nameTH }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $pendingCuisine->nationality }}
                                    </td>
                                    <td>
                                        {{ $pendingCuisine->description }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
</script>