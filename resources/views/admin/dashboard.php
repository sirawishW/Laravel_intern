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
    <h1>Welcome, Admin</h1>
    <div>
        <div>Admin Dashboard</div>
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
</body>
</html>