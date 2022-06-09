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
    <div>
        <table class="table border-grey-200">
            <thead>
                <tr>
                    <th>Name(TH)</th>
                    <th>Name(EN)</th>
                    <th>Nationality</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cuisines as $cuisine)
                    <tr>
                        <td>
                            <a href="{{ route('cuisines.show', ['cuisine' => $cuisine->id]) }}">
                                {{ $cuisine->nameTH }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('cuisines.show', ['cuisine' => $cuisine->id]) }}">
                                {{ $cuisine->nameEN }}
                            </a>
                        </td>
                        <td>
                            {{ $cuisine->nationality }}
                        </td>
                        <td>
                            {{ $cuisine->description }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
            <button type="button" id="addBtn" class="btn btn-dark rounded-pill">
                Add
            </button>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <button type="button" id="homeBtn" class="btn btn-dark rounded-pill">
                <a class="text-white">Home</a>
            </button>
        </div>
    </div>
</body>
</html>