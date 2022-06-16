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
<section class="vh-100">
  <div class="container-fluid bg-white">
    <div class="row">
      <div class="col-sm-6 text-black pt-5 ps-4 mt-5">

        <div class="px-5 ms-xl-4">
          <span class="h1 fw-bold mb-0">Eatomizer</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form method="POST" action="{{ route('login') }}" style="width: 23rem;">
          @csrf
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror form-control form-control-lg" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus/>
              @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
              <label class="form-label" for="username">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control form-control-lg" name="password" required autocomplete="current-password"/>
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
              <label class="form-label" for="password">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-dark rounded-pill" type="summit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a></p>
            <p>Don't have an account? <a href="{{ route('register') }}" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="/images/food2.jpg" class="w-100 vh-100 rounded-8" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
</body>
</html>