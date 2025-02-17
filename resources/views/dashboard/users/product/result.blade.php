@extends('layouts.homepage')

@section('content')
    <div class="container mt-3">
        <h3 class=""><strong>Search Result</strong></h3>

        <div class="my-5">
            <p>Products</p>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $product->category->name }}</h6>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text"><strong>Price:</strong> {{ $product->price }}</p>
                                <p class="card-text"><strong>Discount:</strong> {{ $product->discount }}</p>
                                <div id="carouselExampleAutoplaying-{{ $product->id }}" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($product->images as $index => $image)
                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                <img src="{{ asset('storage/images/products/' . $image) }}" class="d-block w-100 img-thumbnail" alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying-{{ $product->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying-{{ $product->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection