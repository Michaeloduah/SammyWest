@extends('layouts.homepage')

@section('content')
    <div class="container py-5">
        @if ($cartitems->isEmpty())
            <div class="text-center my-5">
                <h3 class="fw-bold text-muted">Your Cart is Empty</h3>
            </div>
        @else
            <h1 class="fw-bold fs-3 mb-4">Shopping Cart</h1>
            <div class="row">
                <div class="col-md-6">
                    @foreach ($cartitems as $cartitem)
                        <div class="card shadow-sm mb-3 p-3 rounded">
                            <div class="row align-items-center">
                                <div class="col-md-3 col-6">
                                    <div class="position-relative">
                                        <a href="{{ route('user.dashboard.product.details', $cartitem->product->id) }}">
                                            <img class="img-fluid rounded"
                                                src="{{ asset('storage/images/products/' . $cartitem->product->images[0]) }}"
                                                alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12 col-6">
                                    <h5 class="fw-bold mt-2">{{ $cartitem->product->name }} <br>
                                        <span class="text-muted mt-3"> x{{ $cartitem->quantity }}</span>
                                    </h5>
                                    <h5 class="fw-bold text-primary">&#8358;
                                        {{ number_format($cartitem->product->price, 2) }}
                                        <a href="{{ route('user.dashboard.cart.destroy', $cartitem->id) }}"
                                            class="position-absolute top-0 end-0 bg-danger text-white p-2 rounded-circle mx-3">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('user.dashboard.cart.decrease', $cartitem->id) }}"
                                        class="btn btn-outline-secondary btn-sm" style="margin: 5px">-</a>
                                    {{-- <input type="text" class="form-control text-center mx-2"
                                        value="{{ $cartitem->quantity }}" readonly style="margin-top: 20px"> --}}
                                    <a href="{{ route('user.dashboard.cart.increase', $cartitem->id) }}"
                                        class="btn btn-outline-secondary btn-sm">+</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-6">
                    <div class="card p-3 shadow-sm rounded">
                        <h5 class="fw-bold text-center py-2 bg-light rounded">Order Summary</h5>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">Item Count:</span>
                            <span>{{ count($cartitems) }}</span>
                        </div>
                        <div class="d-flex justify-content-between my-2">
                            <span class="fw-bold">Total Amount:</span>
                            <span
                                class="text-primary fw-bold">${{ number_format($cartitems->sum(fn($cartitem) => $cartitem->product->price * $cartitem->quantity), 2) }}</span>
                        </div>
                        <a href="{{ route('user.dashboard.cart.confirm') }}" class="btn btn-primary w-100 mt-3">Proceed to
                            Checkout</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
