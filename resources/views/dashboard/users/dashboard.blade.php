@extends('layouts.homepage')

@section('content')
    <div class="container my-3">
        <div class="row">
            <!-- Cart Items Card -->
            <div class="col-lg-3 col-6">
                <a href="{{ route('user.dashboard.cart.index') }}">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Cart Items</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>
                                        @php
                                            $x = count($cartitems);
                                        @endphp
                                        {{ $x }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
            </div><!-- End Cart Items Card -->

            <!-- Order Card -->
            <div class="col-lg-3 col-6">
                <a href="{{ route('user.dashboard.order.index') }}">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Orders</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart-check"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>
                                        @php
                                            $x = count($orders);
                                        @endphp
                                        {{ $x }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
            </div><!-- End Order Card -->

            <!-- Ordered Items Card -->
            <div class="col-lg-3 col-6">
                <a href="">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Orders Items</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart-plus"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>
                                        @php
                                            $x = count($orderitems);
                                        @endphp
                                        {{ $x }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
            </div><!-- End Order Items Card -->

            <!-- Wishlist Card -->
            <div class="col-lg-3 col-6">
                <a href="{{ route('user.dashboard.wishlist.index') }}">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Wishlist</h5>
    
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-search-heart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>
                                        @php
                                            $x = count($wishlists);
                                        @endphp
                                        {{ $x }}
                                    </h6>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </a>
            </div><!-- End Wishlist Card -->
        </div>

        <div class="mt-3">
            @php
                $x = count($orders);
            @endphp

            @if ($x > 0)
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Date/Time Ordered</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr style="background: none">
                                <td> {{ $order->created_at->format('F j, Y, g:i a') }} </td>
                                <td> {{ $order->user->name }} </td>
                                <td> {{ $order->order_number }} </td>
                                <td> {{ $order->status }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h4 class="text-center fw-bold">No orders yet</h4>
            @endif
        </div>
        <hr>
        <div class="my-4">
            <div class="card-header">
                <h4 class="fw-bold">Profile</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Full Name:</strong> {{ $user->name }}</li>
                    <li class="list-group-item"><strong>Email Address:</strong> {{ $user->email }}</li>
                    <li class="list-group-item"><strong>Phone Number:</strong> {{ $user->phone }}</li>
                    <li class="list-group-item"><strong>Address:</strong> {{ $user->address }}</li>
                    <li class="list-group-item"><button class="btn btn-sm btn-outline info">Edit Profile</button></li>
                </ul>
            </div>
        </div>

    </div>
@endsection
