<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zedluxe Store</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo-light.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo-light.png') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-light.png') }}">
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

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />
    {{-- Datatable --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">

    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
    <style>
        .dataTables_length {
            margin-bottom: 20px;
        }

        .dataTables_filter {
            margin-bottom: 20px;
        }

        </style
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <img src="{{ asset('storage/' . $user->image) }}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block fs-6 ps-2">{{ $user->name }}</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0">

                        <span class="d-none d-lg-block fs-5 fw-bolder">FastBuka</span>
                    </a><!-- End Profile Iamge Icon -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>
    <!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#food-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-basket3"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="food-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    <li class="nav-heading">Products</li>

                    <li>
                        <a href="{{ route('vendor.dashboard.product.index') }}">
                            <i class="bi bi-circle"></i><span>All Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('vendor.dashboard.product.create') }}">
                            <i class="bi bi-circle"></i><span>Add New Product</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Food Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-collection"></i><span>Product Categories</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    <li class="nav-heading">Categories</li>

                    <li>
                        <a href="{{ route('vendor.dashboard.category.index') }}">
                            <i class="bi bi-circle"></i><span>All Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('vendor.dashboard.category.create') }}">
                            <i class="bi bi-circle"></i><span>Add New Category</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Food Category Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#order-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-cart-plus"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="order-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                    <li class="nav-heading">Orders</li>

                    <li>
                        <a href="{{ route('vendor.dashboard.order.index') }}">
                            <i class="bi bi-circle"></i><span>All Orders</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Order Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#ordered-item-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-list-ul"></i><span>Ordered Items</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="ordered-item-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                    <li class="nav-heading">Ordered Items</li>

                    <li>
                        <a href="{{ route('vendor.dashboard.orderitem.index') }}">
                            <i class="bi bi-circle"></i><span>All Ordered Items</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Ordered Item Nav -->

            <li class="nav-heading">Settings</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('profile') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-box-arrow-left"></i>
                    <form action="{{ route('logout') }} " method="POST">
                        @csrf
                        <button class="btn btn-sm border border-0"> Logout</button>
                    </form>
                </a>
            </li><!-- End Login Page Nav -->
        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
        @yield('content')
    </main>





    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
