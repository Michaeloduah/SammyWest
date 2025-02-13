@extends('layouts.user')

@section('content')
    <div class="container">

        <form class="my-5" action="{{ route('user.dashboard.order.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container checkout-page" data-aos="fade-up">
                <h1 class="fw-bolder fs-3 text-center my-5">Checkout</h1>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-12">
                        <div class="d-flex justify-content-between p-3 checkout">
                            <h1 class="fs-3 fw-bold">Products</h1>
                            <h1 class="fs-3 fw-bold">Subtotal</h1>
                        </div>

                        <div class="checkout-food-details mt-4">

                            @foreach ($cartitems as $cartitem)
                                <div class="d-flex justify-content-between p-3 ">
                                    <div class="">
                                        <h1 class="fs-5">{{ $cartitem->product->name }} <span
                                                class="fw-bold">x{{ $cartitem->quantity }}</span></h1>
                                    </div>
                                    <div class="">
                                        <h1 class="fs-5 fw-bold">{{ $cartitem->product->price * $cartitem->quantity }}.
                                            <sup>00</sup>
                                        </h1>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        <div class="checkout-price-details my-4">
                            <div class="d-flex justify-content-between p-3">
                                <h1 class="fs-5 fw-bold">Total</h1>
                                <h1 class="fs-5 fw-bold">
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
                            <div class="d-flex justify-content-between p-3">
                                <h1 class="fs-5 fw-bold">Delivery</h1>
                                <h1 class="fs-5 fw-bold">
                                    1500
                                    <sup>.00</sup>
                                </h1>
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <h1 class="fs-5 fw-bold">Amount to Pay</h1>
                                <h1 class="fs-5 fw-bold">
                                    @php
                                        $sum = 0;
                                        foreach ($cartitems as $cartitem) {
                                            $price = $cartitem->product->price * $cartitem->quantity;
                                            $sum += $price;
                                        }
                                        echo $sum + 1500;
                                    @endphp
                                    <sup>.00</sup>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-12 p-3">
                        <div class="bank-transfer">

                            <input class="form-check-input" type="radio" value="Bank Transfer" name="payment_type"
                                id="bank_transfer" />
                            <label class="form-check-label" for="bank_transfer">
                                <h1 class="fs-5 fw-bold ms-4">Pay with bank transfer, P2P</h1>
                            </label>
                            <p class="ms-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, sunt!</p>
                        </div>
                        <div class="debit-card">

                            <input class="form-check-input" type="radio" value="Debit Card" name="payment_type"
                                id="debit_card" />
                            <label class="form-check-label" for="debit_card">
                                <h1 class="fs-5 fw-bold ms-4">Pay with wallet</h1>
                            </label>
                            <p class="ms-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, sunt!</p>
                        </div>
                        <div class="steller">

                            <input class="form-check-input" type="radio" value="Steller" name="payment_type"
                                id="steller" />
                            <label class="form-check-label" for="steller">
                                <h1 class="fs-5 fw-bold ms-4">Pay with Web3 Token</h1>
                            </label>
                            <p class="ms-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, sunt!</p>
                        </div>
                        <label for="Address" class="form-label">Delivery Address:</label>
                        <input class="form-control rounded-pill" type="text" name="shipping_address">
                        <input type="hidden" name="order_number">
                        <input type="hidden" name="total_amount">
                        <button class="btn fw-bold confirm-btn w-100 mt-3">
                            Place Order
                        </button>
                    </div>
                </div>



            </div>
        </form>
    </div>
@endsection
