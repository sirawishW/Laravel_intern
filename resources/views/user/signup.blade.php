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
    <div
    class="bg-image d-flex justify-content-center align-items-center"
    style="
        background-image: url('/images/Food.jpg');
        height: 100vh;
    "
    >
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="card mt-2 pt-5" style="border-radius: 0.5rem; width: 27rem;">
                    <div class="card-body">
                        <div class="px-5 ms-xl-4">
                        <span class="h1 fw-bold mb-0 d-flex align-items-center justify-content-center">Eatomizer</span>
                        </div>
                        <br>
                        <div class="d-flex align-items-center justify-content-center">

                        <form style="width: 20rem;">

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Signup</h3>

                            <div class="form-outline mb-4">
                                <input type="name" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Name</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Email address</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Password</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Confirm Password</label>
                            </div>

                            <div class="d-flex align-items-center justify-content-center py-2 my-3">
                                <button class="btn btn-dark rounded-pill" type="button">Register</button>
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