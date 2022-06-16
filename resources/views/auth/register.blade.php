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
<section class="vh-100">
    <div
    class="bg-image d-flex justify-content-center align-items-center"
    style="
        background-image: url('/images/Food.jpg');
        height: 110vh;
    "
    >
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="card mt-2 pt-5" style="border-radius: 0.5rem; width: 30rem;">
                    <div class="card-body">
                        <div class="px-5 ms-xl-4">
                        <span class="h1 fw-bold mb-0 d-flex align-items-center justify-content-center">Eatomizer</span>
                        </div>
                        <br>
                        <div class="d-flex align-items-center justify-content-center">

                        <form method="POST" action="{{ route('register') }}" style="width: 20rem;">
                        @csrf
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Signup</h3>

                            <div class="form-outline mb-4">
                                <input input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-control form-control-lg" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                <label class="form-label" for="name">Name</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input input id="username" type="text" class="form-control @error('username') is-invalid @enderror form-control form-control-lg" name="username" value="{{ old('username') }}" required autocomplete="username"/>
                                <label class="form-label" for="username">Username</label>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                <label class="form-label" for="email">Email address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control form-control-lg" name="password" required autocomplete="new-password"/>
                                <label class="form-label" for="password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input id="password-confirm" type="password" class="form-control form-control form-control-lg" name="password_confirmation" required autocomplete="new-password"/>
                                <label class="form-label" for="password-confirm">Confirm Password</label>
                            </div>

                            <div class="d-flex align-items-center justify-content-center py-2 my-3">
                                <button class="btn btn-dark rounded-pill" type="summit">Register</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>