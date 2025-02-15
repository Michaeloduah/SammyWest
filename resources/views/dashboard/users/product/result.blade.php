@extends('layouts.homepage')

@section('content')
    <div class="container">
        <h3 class=""><strong>Search Result</strong></h3>

        <div class="my-5">
            <p>Venodrs</p>
            <ul>
                @foreach ($users as $user)
                    <li>{{ $user->name }}</li>
                    <li>{{ $user->email }}</li>
                    <li>{{ $user->phone }}</li>
                    <li>{{ $user->address }}</li>
                    <img src="{{ asset('storage/' . $user->image) }}" width="20%" alt="" class="img-fluid">
                @endforeach
            </ul>

            <p>Products</p>
            <ul>
                @foreach ($products as $product)
                    <li><span class="fw-bolder">Product Category:</span> {{ $product->category->name }}</li>
                    <li><span class="fw-bolder">Name:</span> {{ $product->name }}</li>
                    <li><span class="fw-bolder">Description:</span> {{ $product->description }}</li>
                    <li><span class="fw-bolder">Price:</span> {{ $product->price }}</li>
                    <li><span class="fw-bolder">Discount:</span> {{ $product->discount }}</li>
                    <li><span class="fw-bolder">Images</li>
                    @foreach ($product->images as $image)
                        <img class="thumbnail m-5" width="15%" src="{{ asset('storage/images/products/' . $image) }}"
                            alt="">
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
@endsection
