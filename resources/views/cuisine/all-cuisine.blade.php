<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                            <a href="{{ route('cuisine.show') }}">
                                {{ $cuisine->nameTH }}
                            </a>
                        </td>
                        <td>
                            {{ $cuisine->nameEN }}
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
</body>
</html>