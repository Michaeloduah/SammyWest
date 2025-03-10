@extends('layouts.homepage')

@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container-fluid">
                <h1 class="page-title">Shop</h1>
            </div><!-- End .container-fluid -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Shop</a></li>
                </ol>
            </div><!-- End .container-fluid -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container-fluid">
                <div class="toolbox">
                    {{-- <div class="toolbox-left">
                        <a href="#" class="sidebar-toggler"><i class="icon-bars"></i>Filters</a>
                    </div><!-- End .toolbox-left -->

                    <div class="toolbox-center">
                        <div class="toolbox-info">
                            Showing <span>12 of 56</span> Products
                        </div><!-- End .toolbox-info -->
                    </div><!-- End .toolbox-center --> --}}

                    <div class="toolbox-right">
                        <div class="toolbox-sort">
                            <form action="{{ route('user.dashboard.product.search') }}" class="d-flex align-items-center">
                                @csrf
                                <label for="keyword">Search Product:</label>
                                <div class="">
                                    <input type="text" id="keyword" name="keyword" class="form-control">
                                </div>
                                <button type="submit" class="btn" style="min-width: fit-content">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div><!-- End .toolbox-sort -->
                    </div><!-- End .toolbox-right -->
                </div><!-- End .toolbox -->

                <div class="products">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                                <div class="product">
                                    <figure class="product-media">
                                        @foreach ($product->images as $index => $image)
                                                <img src="{{ asset('storage/images/products/' . $image) }}"
                                                    style="height: 300px; width: 300px; object-fit: cover; object-position: center"
                                                    class="d-block img-thumbnail" alt="">
                                        @endforeach

                                        <div class="product-action action-icon-top">
                                            <form action="{{ route('user.dashboard.cart.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                <input type="hidden" value="1" name="quantity">
                                                <button class="btn-product btn-cart p-2 border-0 bg-transparent">
                                                    <span>Add to cart</span>
                                                </button>
                                            </form>
                                            <a href="{{ route('user.dashboard.product.details', $product->id) }}"
                                                class="btn-product "><span>Quick
                                                    view</span></a>
                                            <form action="{{ route('user.dashboard.wishlist.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                <button class="btn-product btn-compare p-2 border-0 bg-transparent">
                                                    <span>
                                                        Add to Wishlist
                                                    </span>
                                                </button>
                                            </form>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{ $product->category->name }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title">{{ $product->name }}
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            @if ($product->discount)
                                                <span class="old-price">&#8358; {{ $product->price }} </span>
                                                <span class="new-price">&#8358; {{ $product->price - $product->discount }} </span>
                                            @else
                                            &#8358; {{ $product->price }}
                                            @endif
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                        @endforeach
                    </div><!-- End .row -->
                    <div class="pagination-container text-center">
                        {{ $products->links() }}
                    </div><!-- End .pagination-container -->
                </div><!-- End .products -->
            </div><!-- End .container-fluid -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
