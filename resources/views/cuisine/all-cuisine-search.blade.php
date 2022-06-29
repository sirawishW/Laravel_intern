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
    <div class="form-outline mt-3 text-center">
        <form method="GET" action="/searchCuisine">
            <input type="search" name="query" placeholder="Seach menu here" style="border-radius: 0.5rem; width: 15rem; height: 2.5rem">
            <button value="summit" class="btn btn-dark rounded-pill">search</button>
        </form>
    </div>
    <div>
        <table class="table border-grey-200">
            <thead>
                <tr>
                    <th>Name(EN)</th>
                    <th>Name(TH)</th>
                    <th>Nationality</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($searchCuisines as $searchCuisine)
                    <tr>
                        <td>
                            <a href="{{ route('cuisines.show', $searchCuisine->id) }}" class="text-black">
                                {{ $searchCuisine->nameEN }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('cuisines.show', $searchCuisine->id) }}" class="text-black">
                                {{ $searchCuisine->nameTH }}
                            </a>
                        </td>
                        <td>
                            {{ $searchCuisine->nationality }}
                        </td>
                        <td>
                            {{ $searchCuisine->description }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        @if (Auth::user())
        <div class="d-flex align-items-center justify-content-center">
            <a href="/home">
                <button type="button" id="homeBtn" class="btn btn-dark rounded-pill mb-3">
                    Home
                </button>
            </a>
        </div>
        @else
        <div class="d-flex align-items-center justify-content-center">
            <a href="/">
                <button type="button" id="homeBtn" class="btn btn-dark rounded-pill mb-3">
                    Home
                </button>
            </a>
        </div>
        @endif
    </div>
</body>
</html>