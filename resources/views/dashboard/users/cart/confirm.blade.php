@extends('layouts.homepage')

@section('content')
    <div class="container py-5">
        <form action="{{ route('user.dashboard.order.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container checkout-page" data-aos="fade-up">
                <div class="text-center mb-5">
                    <h1 class="fw-bold fs-2">Checkout</h1>
                    <p class="text-muted">Complete your purchase</p>
                </div>

                <div class="row g-4">
                    <!-- Order Summary Section -->
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-0 rounded-3 mb-4">
                            <div class="card-header bg-white py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0 fw-bold">Order Summary</h5>
                                    <span class="badge bg-primary rounded-pill text-white p-3 text-md">{{ count($cartitems) }} items</span>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="checkout-items">
                                    @foreach ($cartitems as $cartitem)
                                        <div class="d-flex justify-content-between p-3 border-bottom">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    @if (isset($cartitem->product->images) && count($cartitem->product->images) > 0)
                                                        <img src="{{ asset('storage/images/products/' . $cartitem->product->images[0]) }}"
                                                            alt="{{ $cartitem->product->name }}" class="img-fluid rounded mr-5"
                                                            style="width: 60px; height: 60px; object-fit: cover;">
                                                    @else
                                                        <div class="bg-light rounded" style="width: 60px; height: 60px;">
                                                        </div>
                                                    @endif
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">{{ $cartitem->product->name }}</h6>
                                                    <p class="text-muted small mb-0">Quantity: <span
                                                            class="fw-medium">{{ $cartitem->quantity }}</span></p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <h6 class="fw-bold mb-0">
                                                    ₦{{ number_format($cartitem->product->price * $cartitem->quantity, 2) }}
                                                </h6>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="p-3 bg-light">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Subtotal</span>
                                        <span
                                            class="fw-medium">₦{{ number_format(
                                                $cartitems->sum(function ($item) {
                                                    return $item->product->price * $item->quantity;
                                                }),
                                                2,
                                            ) }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Delivery Fee</span>
                                        <span class="fw-medium">₦1,500.00</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-bold">Total Amount</h6>
                                        <h6 class="fw-bold">
                                            ₦{{ number_format(
                                                $cartitems->sum(function ($item) {
                                                    return $item->product->price * $item->quantity;
                                                }) + 1500,
                                                2,
                                            ) }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delivery Timeline -->
                        {{-- <div class="card shadow-sm border-0 rounded-3">
                            <div class="card-body">
                                <h6 class="fw-bold mb-3"><i class="fa fa-truck me-2"></i>Estimated Delivery</h6>
                                <p class="text-muted mb-0">Your order will arrive in 2-3 business days</p>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Payment Section -->
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="card-header bg-white py-3">
                                <h5 class="mb-0 fw-bold">Payment Information</h5>
                            </div>
                            <div class="card-body">
                                <!-- Payment Methods -->
                                {{-- <div class="mb-4">
                                    <h6 class="fw-bold mb-3">Select Payment Method</h6>

                                    <div class="payment-method mb-3">
                                        <div class="form-check custom-radio border rounded p-3">
                                            <input class="form-check-input" type="radio" value="Bank Transfer"
                                                name="payment_type" id="bank_transfer" checked />
                                            <label
                                                class="form-check-label d-flex justify-content-between align-items-center"
                                                for="bank_transfer">
                                                <div>
                                                    <span class="fw-medium">Bank Transfer / P2P</span>
                                                    <p class="text-muted small mb-0">Transfer directly to our account</p>
                                                </div>
                                                <i class="fa fa-bank fs-4"></i>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="payment-method mb-3">
                                        <div class="form-check custom-radio border rounded p-3">
                                            <input class="form-check-input" type="radio" value="Debit Card"
                                                name="payment_type" id="debit_card" />
                                            <label
                                                class="form-check-label d-flex justify-content-between align-items-center"
                                                for="debit_card">
                                                <div>
                                                    <span class="fw-medium">Pay with Wallet</span>
                                                    <p class="text-muted small mb-0">Use your online wallet to pay</p>
                                                </div>
                                                <i class="fa fa-wallet fs-4"></i>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="payment-method mb-3">
                                        <div class="form-check custom-radio border rounded p-3">
                                            <input class="form-check-input" type="radio" value="Steller"
                                                name="payment_type" id="steller" />
                                            <label
                                                class="form-check-label d-flex justify-content-between align-items-center"
                                                for="steller">
                                                <div>
                                                    <span class="fw-medium">Web3 Token</span>
                                                    <p class="text-muted small mb-0">Pay with cryptocurrency</p>
                                                </div>
                                                <i class="fa fa-bitcoin fs-4"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}

                                <!-- Delivery Address -->
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-3">Delivery Details</h6>

                                    <div class="mb-3">
                                        <label for="fullName" class="form-label small">Full Name</label>
                                        <input type="text" class="form-control" id="fullName"
                                            placeholder="Enter your full name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label small">Phone Number</label>
                                        <input type="tel" class="form-control" id="phoneNumber"
                                            placeholder="Enter your phone number">
                                    </div>

                                    <div class="mb-3">
                                        <label for="shipping_address" class="form-label small">Delivery Address</label>
                                        <textarea class="form-control" id="shipping_address" name="shipping_address" rows="2"
                                            placeholder="Enter your full delivery address"></textarea>
                                    </div>
                                </div>

                                <input type="hidden" name="order_number">
                                <input type="hidden" name="total_amount"
                                    value="{{ $cartitems->sum(function ($item) {return $item->product->price * $item->quantity;}) + 1500 }}">

                                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">
                                    Complete Order <i class="fa fa-arrow-right ms-2"></i>
                                </button>

                                <p class="text-center text-muted small mt-3">
                                    By completing this order, you agree to our <a href="#">Terms of Service</a> and
                                    <a href="#">Privacy Policy</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <style>
        .custom-radio .form-check-input {
            margin-top: 0.3rem;
        }

        .form-control,
        .btn {
            border-radius: 0.5rem;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.1);
        }

        .card {
            overflow: hidden;
        }

        .checkout-items {
            max-height: 350px;
            overflow-y: auto;
        }

        /* Custom scrollbar for checkout items */
        .checkout-items::-webkit-scrollbar {
            width: 6px;
        }

        .checkout-items::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .checkout-items::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }

        .checkout-items::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
@endsection
