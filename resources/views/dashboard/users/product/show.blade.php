@extends('layouts.homepage')

@section('content')
    <main class="main">
        <div class="page-content">
            <div class="product-details-top">
                <div class="bg-light pb-5 mb-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                        <div class="container d-flex align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </div><!-- End .container -->
                    </nav><!-- End .breadcrumb-nav -->
                    <div class="container mt-1">
                        <div class="row ">
                            <div class="col-md-6 d-flex flex-column align-items-center items-center">
                                <!-- Main Image Display -->
                                <div class="product-main-image mb-3">
                                    @if(count($product->images) > 0)
                                        <img id="main-product-image" class="img-fluid rounded" 
                                            src="{{ asset('storage/images/products/' . $product->images[0]) }}"
                                            style="height: 350px; width: 350px; object-fit: cover;"
                                            alt="{{ $product->name }}">
                                    @endif
                                </div>
                                
                                <!-- Thumbnail Navigation -->
                                @if(count($product->images) > 1)
                                <div class="product-thumbnails d-flex justify-content-center flex-wrap">
                                    @foreach ($product->images as $key => $image)
                                        <div class="thumbnail-item mx-2 mb-2" onclick="changeMainImage('{{ asset('storage/images/products/' . $image) }}', {{ $key }})">
                                            <img class="img-thumbnail {{ $key == 0 ? 'active-thumbnail' : '' }}"
                                                src="{{ asset('storage/images/products/' . $image) }}"
                                                style="height: 70px; width: 70px; object-fit: cover; cursor: pointer;"
                                                alt="Thumbnail {{ $key + 1 }}">
                                        </div>
                                    @endforeach
                                </div>
                                @endif
                                
                            </div>
                            <div class="col-md-6">
                                <h1 class="product-title">{{ $product->name }}</h1><!-- End .product-title -->

                                <div class="product-price">
                                    &#8358;{{ $product->price }}
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p><strong>Description:</strong> {{ $product->description }}</p>
                                </div><!-- End .product-content -->

                                <div class="product-details-action">
                                    <div class="details-action-col ">
                                        <form action="{{ route('user.dashboard.cart.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                                            <input type="hidden" value="1" name="quantity">
                                            <button class="btn btn-primary ">Add to cart</button>
                                        </form>
                                        <form action="{{ route('user.dashboard.wishlist.store') }}" method="POST" style="margin-left: 20px;">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                                            <button class="btn btn-secondary">Add to Wishlist</button>
                                        </form>
                                    </div><!-- End .details-action-col -->

                                    <div class="details-action-col ">
                                    </div><!-- End .details-action-col -->

                                </div><!-- End .product-details-action -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light pb-5 -->
            </div><!-- End .product-details-top -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection

<script>
    // JavaScript to handle the thumbnail navigation
    function changeMainImage(imageSrc, index) {
        // Update main image
        const mainImage = document.getElementById('main-product-image');
        mainImage.src = imageSrc;
        
        // Update active thumbnail
        const thumbnails = document.querySelectorAll('.img-thumbnail');
        thumbnails.forEach((thumb, i) => {
            if (i === index) {
                thumb.classList.add('active-thumbnail');
            } else {
                thumb.classList.remove('active-thumbnail');
            }
        });
    }
    
    // Handle responsive behavior - show carousel on mobile, thumbnails on desktop
    function handleResponsiveLayout() {
        const isMobile = window.innerWidth < 768;
        const mainImageContainer = document.querySelector('.product-main-image');
        const thumbnailsContainer = document.querySelector('.product-thumbnails');
        const carousel = document.getElementById('productCarousel');
    }
    
    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        handleResponsiveLayout();
        window.addEventListener('resize', handleResponsiveLayout);
    });
</script>

<style>
    .active-thumbnail {
        border: 2px solid #0d6efd;
        opacity: 1;
    }
    
    .img-thumbnail {
        opacity: 0.7;
        transition: all 0.2s ease;
    }
    
    .img-thumbnail:hover {
        opacity: 1;
    }
    
    /* Custom carousel indicators */
    .carousel-indicators {
        margin-bottom: 0;
        position: relative;
        margin-top: 10px;
    }
    
    .carousel-indicators button {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #dee2e6;
    }
    
    .carousel-indicators button.active {
        background-color: #0d6efd;
    }
    
    /* Improve carousel navigation visibility */
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: rgba(0,0,0,0.5);
        border-radius: 50%;
    }
    
    /* Main image styling */
    #main-product-image {
        transition: all 0.3s ease;
    }
</style>