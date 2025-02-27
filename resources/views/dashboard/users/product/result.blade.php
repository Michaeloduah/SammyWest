@extends('layouts.homepage')

@section('content')
    <div class="container mt-3">
        <h3 class=""><strong>Search Result</strong></h3>

        <div class="my-5">
            <p>Products</p>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card shadow-sm mb-4 p-3 rounded">
                            <div id="carouselExampleAutoplaying-{{ $product->id }}" class="carousel slide"
                                data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($product->images as $index => $image)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/images/products/' . $image) }}"
                                                class="d-block w-100 img-thumbnail rounded" alt="Product Image">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="fw-bold">{{ $product->name }}</h5>
                                <h6 class="text-muted">{{ $product->category->name }}</h6>
                                <p class="text-muted">{{ $product->description }}</p>
                                <h6 class="fw-bold">Price: &#8358;{{ $product->price }}</h6>
                                <h6 class="fw-bold text-danger">Discount: &#8358;{{ $product->discount }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
