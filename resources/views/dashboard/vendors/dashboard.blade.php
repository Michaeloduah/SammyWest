@extends('layouts.vendor')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="section dashboard">
        <div class="row">
            <!-- Food Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>More Option</h6>
                            </li>

                            <li><a class="dropdown-item" href="{{ route('vendor.dashboard.product.index') }}">See All</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Products</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-basket3"></i>
                            </div>
                            <div class="ps-3">
                                <h6>
                                    @php
                                        $x = count($total_products);
                                    @endphp
                                    {{ $x }}
                                </h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Food Card -->

            <!-- Product Categories Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>More Option</h6>
                        </li>

                        <li><a class="dropdown-item" href="{{ route('vendor.dashboard.category.index') }}">See All</a></li>
                    </ul>
                </div>


                <div class="card info-card customers-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>More Option</h6>
                            </li>

                            <li><a class="dropdown-item" href="{{ route('vendor.dashboard.category.index') }}">See All</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Product Categories</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-collection"></i>
                            </div>
                            <div class="ps-3">
                                <h6>
                                    @php
                                        $x = count($total_categories);
                                    @endphp
                                    {{ $x }}
                                </h6>

                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End Product Categories Card -->

            <!-- Order Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>More Option</h6>
                            </li>

                            <li><a class="dropdown-item" href="{{ route('vendor.dashboard.order.index') }}">See All</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart-plus"></i>
                            </div>
                            <div class="ps-3">
                                <h6>
                                    @php
                                        $x = count($total_orders);
                                    @endphp
                                    {{ $x }}
                                </h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Order Card -->

        </div>

        <div class="row">
            <div class="col-md-8 col-12">
                <!-- Recent Orders -->
                <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>More Option</h6>
                            </li>

                            <li><a class="dropdown-item" href="{{ route('vendor.dashboard.order.index') }}">See All</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Recent Orders</h5>

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
                            <h1 class="text-center fs-3 fw-bold">No orders yet</h1>
                        @endif

                    </div>

                </div><!-- End Recent Orders -->
                <!-- Products Table -->
                <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>More Option</h6>
                            </li>

                            <li><a class="dropdown-item" href="{{ route('vendor.dashboard.product.index') }}">See All</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Recent Products</h5>

                        @php
                            $x = count($products);
                        @endphp

                        @if ($x > 0)
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr style="background: none">
                                            <td> {{ $product->name }} </td>
                                            <td> {{ $product->price }} </td>
                                            <td> {{ $product->discount }} </td>
                                            <td> <img src="{{ asset('storage/images/products/' . $product->images[0]) }}"
                                                    width="100%" class="img-fluid" alt=""> </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h1 class="text-center fs-3 fw-bold">Product Store is Empty</h1>
                        @endif

                    </div>

                </div><!-- End Products Table -->
                <!-- Category Table -->
                <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>More Option</h6>
                            </li>

                            <li><a class="dropdown-item" href="{{ route('vendor.dashboard.category.index') }}">See
                                    All</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Recent Categories</h5>

                        @php
                            $x = count($categories);
                        @endphp

                        @if ($x > 0)
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr style="background: none">
                                            <td> {{ $category->created_at->format('F j, Y, g:i a') }} </td>
                                            <td> {{ $category->name }} </td>
                                            <td> <img src="{{ asset('storage/' . $category->image) }}" width="100%"
                                                    class="img-fluid" alt=""> </td>
                                            <td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h1 class="text-center fs-3 fw-bold">No Category created</h1>
                        @endif

                    </div>

                </div><!-- End Category Table -->
            </div>

            <div class="col-md-4 col-12">
                <!-- Profile -->
                <div class="card">
                    <div class="card-body">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>More Option</h6>
                                </li>

                                <li><a class="dropdown-item" href="{{ route('vendor.dashboard.orderitem.index') }}">See
                                        All</a></li>
                            </ul>
                        </div>

                        <h5 class="card-title">Recent Ordered Items</span></h5>

                        <div class="activity">

                            @foreach ($total_orderitems as $order)
                                @foreach ($order->orderitem as $item)
                                    <div class="activity-item d-flex">
                                        <div class="activite-label">{{ $item->product->category->name }}:</div>
                                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                        <div class="activity-content">
                                            {{ $item->product->name }}
                                        </div>
                                    </div><!-- End activity item-->
                                @endforeach
                            @endforeach




                        </div>

                    </div>
                </div>
                <!-- End Profile -->

                <!-- Profile -->
                <div class="card">
                    <div class="card-body">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>More Option</h6>
                                </li>

                                <li><a class="dropdown-item" href="{{ route('vendor.dashboard.editprofile') }}">See
                                        All</a></li>
                            </ul>
                        </div>

                        <h5 class="card-title">Profile</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">Name:</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    {{ $user->name }}
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">Email:</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    {{ $user->email }}
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">Phone <br> Number</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    {{ $user->phone }}
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">Address</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    {{ $user->address }}
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">Profie <br> Picture</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    <img src="{{ asset('storage/' . $user->image) }}" width="100%" alt=""
                                        class="img-fluid">
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div>
                <!-- End Profile -->
            </div>
        </div>
    </div>
@endsection
