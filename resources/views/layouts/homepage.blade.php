<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zedluxe Originals</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Zedluxe Originals">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo-light.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo-light.png') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-light.png') }}">
    <meta name="apple-mobile-web-app-title" content="Zedluxe">
    <meta name="application-name" content="Zedluxe">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('assets/images/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.countdown.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-6.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-6.css') }}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="page-wrapper py-3">
        <header class="header header-6">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <ul class="top-menu top-link-menu d-none d-md-block">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        {{-- <div class="social-icons social-icons-color">
                            <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                    class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                                    class="icon-twitter"></i></a>
                            <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                                    class="icon-instagram"></i></a>
                        </div><!-- End .soial-icons --> --}}
                        <ul class="top-menu top-link-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="{{ route('login') }}"><i class="bi bi-box-arrow-right"></i>Login</a>
                                    </li>
                                    <li><a href="{{ route('register') }}"><i
                                                class="bi bi-person-add"></i></i>Register</a>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            {{-- <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form> --}}
                        </div><!-- End .header-search -->
                    </div>
                    <div class="header-center">
                        <a href="{{ route('homepage') }}" class="logo">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Zedluxe Logo" width="150">
                        </a>
                    </div><!-- End .header-left -->

                    @if (auth()->user())
                        <div class="header-right">
                            <a href="{{ route('user.dashboard.wishlist.index') }}" class="wishlist-link">
                                <i class="icon-heart-o"></i>
                                <span class="wishlist-count">
                                    {{-- @php
                                        echo count($wishlists);
                                    @endphp --}}
                                </span>
                                <span class="wishlist-txt d-none d-lg-block">My Wishlist</span>
                            </a>

                            <div class="dropdown cart-dropdown">
                                <a href="{{ route('user.dashboard.cart.index') }}" class="dropdown-toggle"
                                    role="button" data-display="static">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">
                                        {{-- @php
                                            echo count($carts);
                                        @endphp --}}
                                    </span>
                                    <span class="cart-txt d-none d-lg-block">My Cart</span>
                                </a>
                            </div><!-- End .cart-dropdown -->
                        </div>
                    @endif

                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container">
                                    <a href="{{ route('homepage') }}" class="">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}" class="">Shop</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="">Contact</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="">About</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                    </div><!-- End .header-left -->

                    {{-- <div class="header-right">
                    <i class="la la-lightbulb-o"></i>
                    <p>Clearance Up to 30% Off</span></p>
                </div> --}}
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->


        @yield('content')


        <footer class="footer">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="widget widget-about">
                                <h4 class="widget-title">about Zedluxe</h4><!-- End .widget-title -->
                                <p style="max-width: fit-content">
                                    At Zedluxe Originals, we believe fashion is more than just clothing—it’s a statement
                                    of individuality and confidence. Founded with a passion for style and quality, we
                                    are dedicated to creating timeless and trend-forward pieces that blend luxury with
                                    everyday wear.

                                    Our collections are crafted with premium materials, ensuring comfort, durability,
                                    and a perfect fit for every occasion. Whether you're looking for casual elegance or
                                    bold expressions, Zedluxe Originals delivers designs that empower you to stand out.
                                </p>

                                <div class="social-icons">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                            class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                            class="icon-instagram"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        {{-- <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 --> --}}

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="{{ route('user.dashboard.cart.index') }}">View Cart</a></li>
                                    <li><a href="{{ route('user.dashboard.wishlist.index') }}">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <figure class="footer-payments">
                        <img src="{{ asset('assets/images/payments.png') }}" alt="Payment methods" width="272"
                            height="20">
                    </figure><!-- End .footer-payments -->
                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="Zedluxe Logo" width="150">
                    <p class="footer-copyright">Copyright © 2025 Zedluxe Originals Store. All Rights Reserved.</p>
                    <!-- End .footer-copyright -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                        class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                        class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                        class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i
                        class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Plugins JS File -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/main.js') }}"></script>
    <script src="{{ asset('assets/js/demos/demo-6.js') }}"></script>
</body>

</html>
