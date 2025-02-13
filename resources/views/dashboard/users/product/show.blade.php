@extends('layouts.user')

@section('content')
    {{-- <div class="container">
        
    </div> --}}
    <section id="product-page" class="product-page container mt-5">
        <div class="container product-page-hero" data-aos="fade-up">
            <div class="food-details">
                <div class="row mb-5">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="food-detalis-img">
                            <img src="{{ asset('storage/images/products/' . $product->images[0]) }}" alt=""
                                class="img-fluid rounded" />
                        </div>
                    </div>

                    <div class="col-12 col-md-9 col-lg-9">
                        <div class="food-details-info px-3">
                            <div class="d-flex justify-content-between">
                                <h3 class="fw-bolder">{{ $product->name }}</h3>
                                <select class="form-select form-select-sm fw-bold restaurant"
                                    aria-label="Small select example" disabled>
                                    <option selected>
                                        {{ $product->user->name }} <i class="bi bi-chevron-down"></i>
                                    </option>
                                </select>
                            </div>
                            <p class="mt-4">
                                {{ $product->description }}
                            </p>
                            <h1 class="price fs-3">N{{ $product->price }}<sup>.00</sup></h1>
                            <div class="d-flex mt-4 ">
                                @if ($inCart)
                                    @php
                                        $foundCartItem = $cartitems->firstWhere('product_id', $product->id); // Assuming $product->id is the ID you want to match
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
                                        $foundCartItem = $cartitems->firstWhere('product_id', $product->id); // Assuming $product->id is the ID you want to match
                                    @endphp

                                    @if ($foundCartItem)
                                        <a href="{{ route('user.dashboard.cart.destroy', $foundCartItem->id) }}">
                                            <button class="btn fw-bold cart-added">Added to cart</button>
                                        </a>
                                    @endif
                                @else
                                    <form action="{{ route('user.dashboard.cart.store') }}" method="POST" class="">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="btn fw-bold cart-add"></i>Add to
                                            Cart</button>
                                    </form>
                                @endif
                                <i class="bi bi-heart mx-3 my-auto fs-4"></i>
                                {{-- <i class="bi bi-heart-fill my-auto fs-4"></i> --}}
                            </div>
                            <p class="mt-3"><span>Food Category:</span> {{ $product->category->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @extends('layouts.dashboard')

@section('content')
    <div class="container">
        
    </div>
@endsection --}}
