@extends('layouts.user')

@section('content')
    <div class="container my-3">
        <h1>Dashboard</h1>

        <ul>
            <li>Full Name: {{ $user->name }}</li>
            <li>Email Address: {{ $user->email }}</li>
            <li>Phone Number: {{ $user->phone }}</li>
            <li>Address: {{ $user->address }}</li>
            <img src="{{ asset('storage/' . $user->image) }}" width="15%" alt="" class="img-fluid">
        </ul>
        <hr>
        {{-- <h3>Features</h3>
        <ol>
            <li><a class="text-decoration-none" href="{{ route('profile') }}">Profile</a></li>
            <span>Products/Food</span>
            <li><a class="text-decoration-none" href="{{ route('user.dashboard.product.index') }}">All Products</a></li>
            <span>Cart/Cart Items</span>
            <li><a href="{{ route('user.dashboard.cart.index') }}" class="text-decoration-none">My Cart</a></li>
            <span>Wishlist/Favourites</span>
            <li><a href="{{ route('user.dashboard.wishlist.index') }}" class="text-decoration-none">My Favourite</a></li>
        </ol> --}}

        <form action="{{ route('logout') }} " method="POST">
            @csrf
            <button class="btn btn-sm btn-outline-danger"> Logout</button>
        </form>
    </div>
@endsection
