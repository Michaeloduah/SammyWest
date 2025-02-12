@extends('layouts.homepage')

@section('content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="container">
            <div class="page-header page-header-big text-center"
                style="background-image: url('assets/images/Zedluxe/Product_12.jpg')">
                <h1 class="page-title text-white">About us<span class="text-white">Who we are</span></h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->

        <div class="page-content pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h2 class="title">Our Vision</h2><!-- End .title -->
                        <p>
                            At Zedluxe Originals, our vision is to redefine fashion by blending originality, luxury, and
                            comfort. We aim to be a globally recognized brand that inspires confidence and self-expression
                            through timeless and innovative designs.
                        </p>
                    </div><!-- End .col-lg-6 -->

                    <div class="col-lg-6">
                        <h2 class="title">Our Mission</h2><!-- End .title -->
                        <p>
                            Our mission is to create high-quality, stylish, and versatile clothing that empowers individuals
                            to embrace their uniqueness. We are committed to sustainable practices, premium craftsmanship,
                            and delivering exceptional fashion experiences that resonate with our customers' lifestyles.
                        </p>
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

                <div class="mb-5"></div><!-- End .mb-4 -->
            </div><!-- End .container -->

            <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 mb-3 mb-lg-0">
                            <h2 class="title">Who We Are</h2><!-- End .title -->
                            <p class="lead text-primary mb-3">
                                Redefining Style with Originality and Luxury
                            </p><!-- End .lead text-primary -->
                            <p class="mb-2">
                                At Zedluxe Originals, we are more than just a clothing brand—we are a movement dedicated to
                                self-expression, confidence, and individuality. Rooted in quality craftsmanship and
                                innovative design, our brand fuses luxury with everyday fashion, ensuring that every piece
                                tells a story.

                                With a commitment to excellence, creativity, and sustainability, we create timeless and
                                trendsetting collections that cater to modern, fashion-forward individuals. At Zedluxe
                                Originals, we don’t just follow trends—we set them.
                            </p>

                            {{-- <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                                <span>VIEW OUR NEWS</span>
                                <i class="icon-long-arrow-right"></i>
                            </a> --}}
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-6 offset-lg-1">
                            <div class="about-images">
                                <img src="assets/images/Zedluxe/Product_6.jpg" alt="" class="about-img-front">
                                {{-- <img src="assets/images/Zedluxe/Product_17.jpg" alt="" class="about-img-back"> --}}
                            </div><!-- End .about-images -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light-2 pt-6 pb-6 -->

            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="brands-text">
                            <h2 class="title">The world's premium design brands in one destination.</h2><!-- End .title -->
                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus
                                id, mattis vel, nis</p>
                        </div><!-- End .brands-text -->
                    </div><!-- End .col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="brands-display">
                            <div class="row justify-content-center">
                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/1.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/2.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/3.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/4.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/5.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/6.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/7.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/8.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/9.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .brands-display -->
                    </div><!-- End .col-lg-7 -->
                </div><!-- End .row -->

                <hr class="mt-4 mb-6">

                <h2 class="title text-center mb-4">Meet Our Team</h2><!-- End .title text-center mb-2 -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="member member-anim text-center">
                            <figure class="member-media">
                                <img src="assets/images/team/member-1.jpg" alt="member photo">

                                <figcaption class="member-overlay">
                                    <div class="member-overlay-content">
                                        <h3 class="member-title">Samanta Grey<span>Founder & CEO</span></h3>
                                        <!-- End .member-title -->
                                        <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit
                                            nunc.</p>
                                        <div class="social-icons social-icons-simple">
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                                    class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                    class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                    class="icon-instagram"></i></a>
                                        </div><!-- End .soial-icons -->
                                    </div><!-- End .member-overlay-content -->
                                </figcaption><!-- End .member-overlay -->
                            </figure><!-- End .member-media -->
                            <div class="member-content">
                                <h3 class="member-title">Samanta Grey<span>Founder & CEO</span></h3>
                                <!-- End .member-title -->
                            </div><!-- End .member-content -->
                        </div><!-- End .member -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="member member-anim text-center">
                            <figure class="member-media">
                                <img src="assets/images/team/member-2.jpg" alt="member photo">

                                <figcaption class="member-overlay">
                                    <div class="member-overlay-content">
                                        <h3 class="member-title">Bruce Sutton<span>Sales & Marketing Manager</span></h3>
                                        <!-- End .member-title -->
                                        <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit
                                            nunc.</p>
                                        <div class="social-icons social-icons-simple">
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                                    class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                    class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                    class="icon-instagram"></i></a>
                                        </div><!-- End .soial-icons -->
                                    </div><!-- End .member-overlay-content -->
                                </figcaption><!-- End .member-overlay -->
                            </figure><!-- End .member-media -->
                            <div class="member-content">
                                <h3 class="member-title">Bruce Sutton<span>Sales & Marketing Manager</span></h3>
                                <!-- End .member-title -->
                            </div><!-- End .member-content -->
                        </div><!-- End .member -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="member member-anim text-center">
                            <figure class="member-media">
                                <img src="assets/images/team/member-3.jpg" alt="member photo">

                                <figcaption class="member-overlay">
                                    <div class="member-overlay-content">
                                        <h3 class="member-title">Janet Joy<span>Product Manager</span></h3>
                                        <!-- End .member-title -->
                                        <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit
                                            nunc.</p>
                                        <div class="social-icons social-icons-simple">
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                                    class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                    class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                    class="icon-instagram"></i></a>
                                        </div><!-- End .soial-icons -->
                                    </div><!-- End .member-overlay-content -->
                                </figcaption><!-- End .member-overlay -->
                            </figure><!-- End .member-media -->
                            <div class="member-content">
                                <h3 class="member-title">Janet Joy<span>Product Manager</span></h3>
                                <!-- End .member-title -->
                            </div><!-- End .member-content -->
                        </div><!-- End .member -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container --> --}}

            <div class="mb-2"></div><!-- End .mb-2 -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
