@extends('layouts.homepage')

@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Wishlist<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="container py-5">

            @if ($wishlists->isEmpty())
                <div class="text-center my-5">
                    <h3 class="fw-bold text-muted">Your Wishlist is Empty</h3>
                </div>
            @else
                <div class="row">
                    @foreach ($wishlists as $wishlist)
                            <div class="col-6 col-md-4 col-lg-4 col-xl-4 col-xxl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        {{-- @foreach ($product->images) --}}
                                                <img src="{{ asset('storage/images/products/' . $wishlist->product->images[0]) }}"
                                                    style="height: 300px; width: 100%; object-fit: cover; object-position: center"
                                                    class="d-block" alt="">
                                        {{-- @endforeach --}}
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{ $wishlist->product->category->name }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title">{{ $wishlist->product->name }}
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            @if ($wishlist->product->discount)
                                                <span class="old-price">&#8358; {{ $wishlist->product->price }} </span>
                                                <span class="new-price">&#8358; {{ $wishlist->product->price - $wishlist->product->discount }} </span>
                                            @else
                                            &#8358; {{ $wishlist->product->price }}
                                            @endif
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="d-flex justify-content-between mt-1">
                                        <a href="{{ route('user.dashboard.product.details', $wishlist->product->id) }}"
                                            class="btn btn-outline-success btn-sm">More Details</a>
                                        <a href="{{ route('user.dashboard.wishlist.destroy', $wishlist->id) }}"
                                            class="btn btn-outline-danger btn-sm">Delete</a>
                                    </div>
                                    <form action="{{ route('user.dashboard.cart.store') }}" method="POST" class="mt-2">
                                        @csrf
                                        <input type="hidden" value="{{ $wishlist->product->id }}" name="product_id">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="btn btn-outline-primary btn-sm w-100">Add to Cart</button>
                                    </form>
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                        @endforeach
                </div>
            @endif
        </div>
    </main>
@endsection
