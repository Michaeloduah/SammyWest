@extends('layouts.vendor')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>Admin Dashboard</strong></h1>
        <h3 class=""><strong>More Product Detail</strong></h3>

        <div class="my-5">
            <p><span class="fw-bolder">Product Category:</span> {{ $product->category->name }}</p>
            <p><span class="fw-bolder">Name:</span> {{ $product->name }}</p>
            <p><span class="fw-bolder">Description:</span> {{ $product->description }}</p>
            <p><span class="fw-bolder">Price:</span> {{ $product->price }}</p>
            <p><span class="fw-bolder">Discount:</span> {{ $product->discount }}</p>
            <p><span class="fw-bolder">Images</p>
            @foreach ($product->images as $image)
                <img class="thumbnail m-5" width="15%" src="{{ asset('storage/images/products/' . $image) }}"
                    alt="">
            @endforeach
        </div>
    </div>
@endsection

{{-- @extends('layouts.dashboard')

@section('content')
    <div class="container">
        
    </div>
@endsection --}}
