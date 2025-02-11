@extends('layouts.user')

@section('content')
    <div class="container">
        <h1 class="text-center">User Dashboard</h1>
        <h3>Your Cart</h3>

        <div class="my-5">
            @if (count($wishlists) <= 0)
                <h1>Your Wishlist is empty</h1>
            @else
                {{-- <form action="{{}}" method="POST" enctype="multipart/form-data">
                @csrf --}}
                <h1>Your Cart</h1>
                @foreach ($wishlists as $wishlist)
                    <p>Product Name: {{ $wishlist->food->name }}</p>
                    <p>Description: {{ $wishlist->food->description }}</p>
                    <p>Images:</p>
                    @foreach ($wishlist->food->images as $image)
                        <img class="thumbnail m-5" width="10%" src="{{ asset('storage/images/foods/' . $image) }}"
                            alt="">
                    @endforeach

                    <p>Discount: {{ $wishlist->food->discount }}</p>

                    <a href="{{ route('user.dashboard.food.details', $wishlist->food->id) }}"><button
                            class="btn btn-sm btn-outline-success m-1"><i class="bi bi-pencil-square"></i>More
                            Details</button></a>
                    <a href="{{ route('user.dashboard.wishlist.destroy', $wishlist->id) }}"><button
                            class="btn btn-sm btn-outline-danger m-1"><i class="bi bi-trash"></i>Delete</button></a>
                    <form action="{{ route('user.dashboard.cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $wishlist->food->id }}" name="food_id">
                        <input type="hidden" value="1" name="quantity">
                        <button class="btn btn-sm btn-outline-primary m-1"><i class="bi bi-pencil-square"></i>Add to
                            Cart</button>
                    </form>
                    <hr>
                @endforeach

                <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="order_number" id="order_number">
                @if ($errors->has('order_number'))
                    <span class="error text-danger">
                        <span class="section-subtitle"
                            style="margin-inline: 0px">{{ $errors->first('order_number') }}</span>
                    </span>
                @endif

                <input type="hidden" name="status" id="status" value="Pending">
                @if ($errors->has('status'))
                    <span class="error text-danger">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('status') }}</span>
                    </span>
                @endif

                <input type="hidden" name="payment_method" id="payment_method" value="Pending">
                @if ($errors->has('payment_method'))
                    <span class="error text-danger">
                        <span class="section-subtitle"
                            style="margin-inline: 0px">{{ $errors->first('payment_method') }}</span>
                    </span>
                @endif

                <input type="hidden" name="payment_status" id="payment_status" value="Pending">
                @if ($errors->has('payment_status'))
                    <span class="error text-danger">
                        <span class="section-subtitle"
                            style="margin-inline: 0px">{{ $errors->first('payment_status') }}</span>
                    </span>
                @endif

                <input type="hidden" name="shipping_address" id="shipping_address" value="Pending">
                @if ($errors->has('shipping_address'))
                    <span class="error text-danger">
                        <span class="section-subtitle"
                            style="margin-inline: 0px">{{ $errors->first('shipping_address') }}</span>
                    </span>
                @endif

                <button class="btn btn-sm btn-outline-info mt-3" type="submit">Place Order</button>
                {{-- </form> --}}
            @endif
        </div>
    </div>
@endsection

{{-- @extends('layouts.dashboard')

@section('content')
    <div class="container">
        
    </div>
@endsection --}}
