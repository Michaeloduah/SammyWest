@extends('layouts.homepage')

@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
            style="background-image: url('assets/images/Zedluxe/Product_14.jpg')">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab"
                                    aria-controls="signin-2" aria-selected="false">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2"
                                    role="tab" aria-controls="register-2" aria-selected="true">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                <form action="#">
                                    @csrf
                                    <div class="form-group">
                                        <label for="singin-email-2">Email address *</label>
                                        <input type="text" class="form-control" id="singin-email-2" name="singin-email"
                                            required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password-2">Password *</label>
                                        <input type="password" class="form-control" id="singin-password-2"
                                            name="singin-password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        {{-- <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember-2">
                                            <label class="custom-control-label" for="signin-remember-2">Remember
                                                Me</label>
                                        </div><!-- End .custom-checkbox --> --}}

                                        <a href="{{ route('password.request') }}" class="forgot-link">Forgot Your
                                            Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade show active" id="register-2" role="tabpanel"
                                aria-labelledby="register-tab-2">
                                <form enctype="multipart/form-data" action="{{ route('register') }}" method="POST"
                                    class="mt-4 register-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12 my-auto" id="form-section">
                                            <div class="mb-3">
                                                <label for="InputName" class="form-label">Full Name *</label>
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
                                                <label for="InputEmail" class="form-label">Email Address *</label>
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
                                                <label for="InputPhone" class="form-label">Phone Number *</label>
                                                <div class="row">
                                                    <div class="col-md-4 col-4">
                                                        <input type="tel" class="form-control" id="InputPhone"
                                                            placeholder="NG +234" readonly>
                                                    </div>
                                                    <div class="col-md-8 col-8">
                                                        <input type="tel" name="phone" class="form-control"
                                                            id="InputPhone" placeholder="Phone Number">
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
                                                <label for="InputLocation" class="form-label">Address *</label>
                                                <input type="text" name="address" class="form-control"
                                                    id="InputLocation" placeholder="Enter your address">
                                            </div>
                                            @if ($errors->has('address'))
                                                <span class="error text-danger">
                                                    <span class="section-subtitle"
                                                        style="margin-inline: 0px">{{ $errors->first('address') }}</span>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-12 col-12 my-auto" id="form-section">
                                            <div class="mb-3">
                                                <label for="InputLocation" class="form-label">City *</label>
                                                <input type="text" name="city" class="form-control"
                                                    id="InputLocation" placeholder="Enter your City">
                                            </div>
                                            @if ($errors->has('city'))
                                                <span class="error text-danger">
                                                    <span class="section-subtitle"
                                                        style="margin-inline: 0px">{{ $errors->first('city') }}</span>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 col-12 my-auto" id="form-section">
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label fw-medium">Password
                                                    *</label>
                                                <div class="input-group flex-nowrap">
                                                    <input type="password" name="password"
                                                        class="form-control border border-end-0" placeholder="Password"
                                                        aria-label="Password" aria-describedby="addon-wrapping"
                                                        id="exampleInputPassword1" />
                                                    <button type="button"
                                                        class="input-group-text bg-white border border-start-0"
                                                        id="addon-wrapping show-password" onclick="showPassword()">
                                                        <i class="bi bi-eye-slash" id="password-icon"></i>
                                                    </button>
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
                                                <label for="InputConfirmPassword1" class="form-label">Confirm
                                                    Password *</label>
                                                <div class="input-group flex-nowrap">
                                                    <input type="password" name="confirmpassword" class="form-control"
                                                        id="InputConfirmPassword1" placeholder="Confirm Password">
                                                    <button type="button"
                                                        class="input-group-text bg-white border border-start-0"
                                                        id="addon-wrapping show-password" onclick="showConfirmPassword()">
                                                        <i class="bi bi-eye-slash" id="confirmpassword-icon"></i>
                                                    </button>
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
                                </form>
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->
    </main><!-- End .main -->
@endsection
