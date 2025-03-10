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
                    <div class="container">
                        <img class="img-fluid rounded"
                            src="{{ asset('storage/images/products/' . $product->images[0]) }}"
                            alt="Product Image">
                    </div><!-- End .container -->
                </div><!-- End .bg-light pb-5 -->

                <div class="product-details product-details-centered product-details-separator">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="product-title">{{ $product->name }}</h1><!-- End .product-title -->

                                <div class="product-price">
                                    &#8358;{{ $product->price }}
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p><strong>Description:</strong> {{ $product->description }}</p>
                                </div><!-- End .product-content -->

                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details-action">
                                    {{-- @if ($inCart)
                                        @php
                                            $foundCartItem = $cartitems->firstWhere('food_id', $product->id);
                                        @endphp

                                        @if ($foundCartItem)
                                            <div class="product-quantity d-flex justify-content-between  me-3"
                                                style="width: 30%;">
                                                <a href="{{ route('user.dashboard.cart.decrease', $foundCartItem->id) }}"><button
                                                        class="btn btn-lg button1">-</button></a>
                                                <input class="form-control border border-0 text-center fs-5" type="text"
                                                    value="{{ $foundCartItem->quantity }}" readonly />
                                                <a href="{{ route('user.dashboard.cart.increase', $foundCartItem->id) }}"><button
                                                        class="btn btn-lg button2">+</button></a>
                                            </div>
                                        @endif
                                    @endif

                                    @if ($inCart)
                                        @php
                                            $foundCartItem = $cartitems->firstWhere('food_id', $product->id);
                                        @endphp

                                        @if ($foundCartItem)
                                            <a href="{{ route('user.dashboard.cart.destroy', $foundCartItem->id) }}">
                                                <button class="btn fw-bold cart-added">Added to cart</button>
                                            </a>
                                        @endif
                                    @else
                                        <form action="{{ route('user.dashboard.cart.store') }}" method="POST"
                                            class="">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="food_id">
                                            <input type="hidden" value="1" name="quantity">
                                            <button class="btn fw-bold cart-add"></i>Add to
                                                Cart</button>
                                        </form>
                                    @endif --}}

                                    <div class="details-action-col">
                                        {{-- <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" value="1"
                                                min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity --> --}}

                                        <form action="{{ route('user.dashboard.cart.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                                            <input type="hidden" value="1" name="quantity">
                                            <button class="btn-product btn-cart p-2 border-0 bg-transparent">
                                                <span>Add to cart</span>
                                            </button>
                                        </form>
                                    </div><!-- End .details-action-col -->

                                    <div class="details-action-wrapper">
                                        <form action="{{ route('user.dashboard.wishlist.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                                            <button class="btn-product btn-compare p-2 border-0 bg-transparent">
                                                <span>
                                                    Add to Wishlist
                                                </span>
                                            </button>
                                        </form>
                                    </div><!-- End .details-action-wrapper -->
                                </div><!-- End .product-details-action -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .product-details -->
            </div><!-- End .product-details-top -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
