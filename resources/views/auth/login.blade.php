<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Zedluxe Côté - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon" /> --}}
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>

    <main class="container mt-5" style="">
        <div class="back">
            <a href="{{ url()->previous()  }}" class="text-decoration-none">
                <button class="btn btn-sm"><i class="bi bi-arrow-left"></i> Back</button>
            </a>
        </div>
        <div class="row mx-auto" id="login-section">
            <div class="col-md-6 col-12 my-auto p-5" id="form-section">
                <h1 class="fw-bold">Welcome Back!</h1>
                <p>Enter view login details below</p>

                <form enctype="multipart/form-data" method="POST" action="{{ route('login') }}" class="mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-medium">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="example@email.com" />
                        @if ($errors->has('email'))
                            <span class="error text-danger">
                                <span class="section-subtitle"
                                    style="margin-inline: 0px">{{ $errors->first('email') }}</span>
                            </span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-medium">Password</label>
                        <a class="text-decoration-none float-end" href="">Forgotten Password?</a>
                        <div class="input-group flex-nowrap">
                            <input type="password" name="password" class="form-control border border-end-0"
                                placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping"
                                id="exampleInputPassword1" />
                            <span style="margin-left: -5px">
                                <button type="button" class="input-group-text bg-white border border-start-0"
                                    id="addon-wrapping show-password" onclick="showPassword()">
                                    <i class="bi bi-eye-slash" id="password-icon"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label mb-3" for="flexCheckDefault">
                        Keep me logged in
                    </label>

                    <button type="submit" class="btn btn-primary w-100" id="login-btn">
                        Login
                    </button>

                    <p class="mt-3">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-decoration-none text-dark fw-bold">Create
                            Account</a>
                    </p>
                </form>
            </div>

            <div class="col-md-6 col-12" id="image-section">
                <img src="{{ asset('assets/images/login.png') }}" alt="" class="img-fluid" />
            </div>
        </div>
    </main>


    <footer class="my-5">
        <p class="text-center text-secondary fw-medium" id="footer-text">
            Zedluxe Côté @ 2024 All Right Reserved
        </p>
    </footer>

</body>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
