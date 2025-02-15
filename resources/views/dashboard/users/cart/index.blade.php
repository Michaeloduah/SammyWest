@extends('layouts.homepage')

@section('content')
    <div class="container">

        <div class="my-5">
            @if (count($cartitems) <= 0)
                <h3>Your Cart is empty</h3>
            @else
                <h1 class="fw-bolder fs-3 my-3">Cart</h1>
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-12">
                        @foreach ($cartitems as $cartitem)
                            <div class="row d-flex align-items-end">
                                <div class="col-md-3 col-6 my-auto">
                                    <div class="cart-food-card">
                                        <div style="background-color: #f5f5ff; border-radius: 10px">
                                            <div class="delete text-white px-2">
                                                <a href="{{ route('user.dashboard.cart.destroy', $cartitem->id) }}"><i
                                                        class="bi bi-trash-fill text-white"></i></a>
                                            </div>
                                            <a href="{{ route('user.dashboard.product.details', $cartitem->product->id) }}">

                                                <img class="img-fluid d-block mx-auto p-2 cart-img"
                                                    src="{{ asset('storage/images/products/' . $cartitem->product->images[0]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 my-auto">
                                    <div class="cart-food-detail">
                                        <h1 class="fw-bolder fs-4">{{ $cartitem->product->name }} x{{ $cartitem->quantity }}
                                        </h1>
                                        <p class="restaurant fs-6">{{ $cartitem->product->user->name }}</p>
                                        <p class="fs-6">
                                            Extras:

                                        </p>
                                        <h1 class="fw-bolder fs-5">{{ $cartitem->product->price }}<sup>.00</sup></h1>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-quantity d-flex justify-content-between mb-3">
                                        <a href="{{ route('user.dashboard.cart.decrease', $cartitem->id) }}"><button
                                                class="btn btn-lg button1">-</button></a>
                                        <input class="form-control border border-0 text-center fs-6" type="text"
                                            value="{{ $cartitem->quantity }}" readonly />
                                        <a href="{{ route('user.dashboard.cart.increase', $cartitem->id) }}"><button
                                                class="btn btn-lg button2">+</button></a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>

                    <div class="col-md-4 col-lg-4 col-12">
                        <div class="subtotal p-1">
                            <h1 class="fs-5 fw-bolder mb-3 p-2" style="background-color: #f2f9ff">
                                SubTotal
                            </h1>
                            <div class="p-3" style="border: 3px solid #f2f9ff; border-radius: 30px">
                                <div class="d-flex justify-content-between">
                                    <h1 class="fw-bolder fs-6 my-2">Item Count</h1>
                                    <h1 class="fw-bolder fs-6 my-2">
                                        @php
                                            echo count($cartitems);
                                        @endphp
                                    </h1>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h1 class="fw-bolder fs-6 my-2">Amount to pay</h1>
                                    <h1 class="fw-bolder fs-6 my-2">
                                        {{-- {{ $cartitem->product->price }} --}}
                                        @php
                                            $sum = 0;
                                            foreach ($cartitems as $cartitem) {
                                                $price = $cartitem->product->price * $cartitem->quantity;
                                                $sum += $price;
                                            }
                                            echo $sum;
                                        @endphp
                                        <sup>.00</sup>
                                    </h1>
                                </div>
                            </div>
                            <a class="text-decoration-none" href="{{ route('user.dashboard.cart.confirm') }}">
                                <button class="btn fw-bold checkout w-100 mt-3">
                                    Place Order
                                </button></a>
                        </div>
                    </div>
                </div>



                <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="order_number" id="order_number">

                <input type="hidden" name="status" id="status" value="Pending">
                <input type="hidden" name="payment_method" id="payment_method" value="Pending">

                <input type="hidden" name="payment_status" id="payment_status" value="Pending">

                <input type="hidden" name="shipping_address" id="shipping_address" value="Pending">
            @endif
        </div>
    </div>
@endsection

{{-- @extends('layouts.dashboard')

@section('content')
    <div class="container">
        
    </div>
@endsection --}}
