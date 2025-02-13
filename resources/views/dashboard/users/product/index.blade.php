@extends('layouts.homepage')

@section('content')
    <section id="hero" class="d-flex align-items-center menu-hero-section">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="menu-content">
                <div class="row my-auto p-5">
                    <div class="col-md-2 d-none d-md-block"></div>
                    <div class="col-md-8">
                        <p class="text-center">Home / Menu</p>
                        <h1 class="text-center">Our Menu</h1>
                    </div>
                    <div class="col-md-2 d-none d-md-block"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Product Section ======= -->
    <section id="product" class="menu-product">
        <div class="container" data-aos="fade-up">
            <div class="container">
                <h1 class="menu-product-text">Featured Products</h1>
                <p class="">
                    Nutritious meals from our top restaurants you would love
                </p>
            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="products-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="mt-2 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="{{ asset('assets/images/food_1.png') }}"
                                        class="img-fluid d-block mx-auto py-3" alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">
                                        N8,500.<sup>00</sup>
                                    </h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End product item -->
                    <div class="swiper-slide">
                        <div class="mt-2 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="{{ asset('assets/images/food_1.png') }}"
                                        class="img-fluid d-block mx-auto py-3" alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">
                                        N8,500.<sup>00</sup>
                                    </h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End product item -->
                    <div class="swiper-slide">
                        <div class="mt-2 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="{{ asset('assets/images/food_1.png') }}"
                                        class="img-fluid d-block mx-auto py-3" alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">
                                        N8,500.<sup>00</sup>
                                    </h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End product item -->
                    <div class="swiper-slide">
                        <div class="mt-2 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="{{ asset('assets/images/food_1.png') }}"
                                        class="img-fluid d-block mx-auto py-3" alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">
                                        N8,500.<sup>00</sup>
                                    </h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End product item -->
                    <div class="swiper-slide">
                        <div class="mt-2 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="{{ asset('assets/images/food_1.png') }}"
                                        class="img-fluid d-block mx-auto py-3" alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">
                                        N8,500.<sup>00</sup>
                                    </h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End product item -->
                    <div class="swiper-slide">
                        <div class="mt-2 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="{{ asset('assets/images/food_1.png') }}"
                                        class="img-fluid d-block mx-auto py-3" alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">
                                        N8,500.<sup>00</sup>
                                    </h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End product item -->
                </div>
                <!-- <div class="swiper-pagination mt-5"></div> -->
            </div>
        </div>
    </section>
    <!-- End Product Section -->

    {{-- Vendors --}}
    <section>
        <div class="container" data-aos="fade-up">
            <h1 class="menu-product-text">Our Restaurant and Vendors</h1>
            <p class="">
                Enjoy nutritional foods from our restaurant and vendors
            </p>
        </div>
    </section>
    {{-- End Vendors --}}

    {{-- Food Menu --}}
    <div class="container">
        <div class="filter row">
            <div class="price-range col-md-4 col-12">
                <div class="range_container">
                    <span class="fw-bold">Price range:</span>
                    <input class="form-control form_control_container__time__input" type="number" id="fromInput"
                        value="2000" min="1000" max="10000" />
                    <input class="form-control form_control_container__time__input" type="number" id="toInput"
                        value="4000" min="1000" max="10000" />
                    <div class="sliders_control">
                        <input id="fromSlider" type="range" value="2000" min="1000" max="10000"
                            class="mt-3" />
                        <input id="toSlider" type="range" value="5000" min="1000" max="10000"
                            class="mt-3" />
                    </div>
                </div>
            </div>
            <div class="search col-md-4 col-12">
                <form action="{{ route('user.dashboard.product.search') }}">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input type="search" class="form-control w-full" placeholder=" Search meals, restaurants..."
                            aria-describedby="basic-addon1" name="keyword" />
                        <button class="btn btn-sm btn-outline-success mx-1 border b-0">
                            Search
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-12">
                <div class="d-flex justify-content-between">
                    <label for="" class="form-label fw-bold mt-2">Sort by: </label>
                    <select class="form-select my-auto border border-0" aria-label="Default select example"
                        style="width: 30%">
                        <option selected class="fw-bold">Default</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="" class="form-label fw-bold mt-2">Show: </label>
                    <select class="form-select my-auto border border-0 w-25" aria-label="Default select example">
                        <option selected class="fw-bold">12</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="my-5" data-aos="fade-up">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="food-card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                            <div style="background-color: #d2e8ff; border-radius: 20px">
                                {{-- <div class="rating text-white px-2">
                                    <i class="bi bi-stars"></i>
                                    <span class=""> 4.5</span>
                                </div> --}}
                                {{-- @foreach ($product->images as $image)
                                    <img class="img-fluid d-block mx-auto py-3"
                                        src="{{ asset('storage/images/products/' . $image) }}" alt="">
                                @endforeach --}}
                                <a href="{{ route('user.dashboard.product.details', $product->id) }}">
                                    <img src="{{ asset('storage/images/products/' . $product->images[0]) }}" alt=""
                                        class="img-fluid d-block mx-auto py-3" style="height:200px" />
                                </a>
                            </div>
                            <div class="mt-2 d-flex">
                                <h1 class="fs-6 me-auto">{{ $product->name }}</h1>
                                <p><i class="bi bi-clock"></i> {{ $product->processing_time }} </p>
                            </div>
                            <p>
                                {{ $product->description }}
                            </p>
                            <div class="mt-2 d-flex">
                                <h1 class="fs-3 me-auto fw-bolder">
                                    {{ $product->price }}.<sup>00</sup>
                                </h1>

                                @if ($product->in_cart)
                                    @php
                                        $foundCartItem = $cartitems->firstWhere('product_id', $product->id); // Assuming $product->id is the ID you want to match
                                    @endphp
                                    <a href="{{ route('user.dashboard.cart.destroy', $foundCartItem->id) }}">
                                        <button class="btn food-button-add px-5 py-2">Added to cart</button>
                                    </a>
                                @else
                                    <form action="{{ route('user.dashboard.cart.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="btn food-button px-5 py-2">
                                            Add to Cart
                                        </button>
                                    </form>
                                @endif
                                <i class="bi bi-heart ms-2 my-auto fs-5"></i>
                            </div>
                        </div>
                        {{-- <form action="{{ route('user.dashboard.cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn btn-sm btn-outline-primary m-1"><i class="bi bi-pencil-square"></i>Add to
                                Cart</button>
                        </form>
                        <form action="{{ route('user.dashboard.wishlist.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <button class="btn btn-sm btn-outline-primary m-1"><i class="bi bi-pencil-square"></i>Add to
                                Favourite</button>
                        </form> --}}
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center ">
                {{ $products->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
    {{-- End Food Menu --}}
@endsection
