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

    <div class="">
        <img src="{{ asset('assets/images/Section.png') }}" class="img-fluid z-0 position-relative" />

        <main class="container">
            <div class="back">
                <a href="{{ url()->previous() }}" class="text-decoration-none">
                    <button class="btn btn-sm"><i class="bi bi-arrow-left"></i> Back</button>
                </a>
            </div>
            <div class="bg-white z-3 position-relative p-5" id="register-section">
                <h1 class="fs-1 fw-bolder">Let's Get to know you!</h1>
                <p>We'll help you set up an account in less than a minute</p>
                <form enctype="multipart/form-data" action="{{ route('register') }}" method="POST"
                    class="mt-4 register-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputName" class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" id="InputName"
                                    placeholder="Full Name">
                            </div>
                            @if ($errors->has('name'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('name') }}</span>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" id="InputEmail"
                                    placeholder="example@gmail.com">
                            </div>
                            @if ($errors->has('email'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('email') }}</span>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-12 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputPhone" class="form-label">Phone Number</label>
                                <div class="row">

                                    <div class="col-md-2 col-4">
                                        <input type="tel" class="form-control" id="InputPhone" placeholder="NG +234"
                                            readonly>
                                    </div>
                                    <div class="col-md-10 col-8">
                                        <input type="tel" name="phone" class="form-control" id="InputPhone"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="error text-danger">
                                        <span class="section-subtitle"
                                            style="margin-inline: 0px">{{ $errors->first('phone') }}</span>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputLocation" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="InputLocation"
                                    placeholder="Enter your City">
                            </div>
                            @if ($errors->has('address'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('address') }}</span>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-medium">Password</label>
                                <div class="input-group flex-nowrap">
                                    <input type="password" name="password" class="form-control border border-end-0"
                                        placeholder="Password" aria-label="Password"
                                        aria-describedby="addon-wrapping" id="exampleInputPassword1" />
                                    <span style="margin-left: -5px">
                                        <button type="button" class="input-group-text bg-white border border-start-0"
                                            id="addon-wrapping show-password" onclick="showPassword()">
                                            <i class="bi bi-eye-slash" id="password-icon"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            @if ($errors->has('password'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('password') }}</span>
                                </span>
                            @endif

                        </div>

                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputConfirmPassword1" class="form-label">Confirm Password</label>
                                <div class="input-group flex-nowrap">
                                    <input type="password" name="confirmpassword" class="form-control"
                                        id="InputConfirmPassword1" placeholder="Confirm Password">
                                    <span style="margin-left: -5px">
                                        <button type="button" class="input-group-text bg-white border border-start-0"
                                            id="addon-wrapping show-password" onclick="showConfirmPassword()">
                                            <i class="bi bi-eye-slash" id="password-icon"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            @if ($errors->has('confirmpassword'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('confirmpassword') }}</span>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3" id="login-btn">
                            Create an Account
                        </button>

                    </div>
                    <p class="mt-3">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-decoration-none text-dark fw-bold">Login</a>
                </form>
            </div>
        </main>
    </div>
</body>

<footer class="my-5">
    <p class="text-center text-secondary fw-medium" id="footer-text">
        Zedluxe Côté @ 2024 All Right Reserved
    </p>
</footer>


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
