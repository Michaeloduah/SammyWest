@extends('layouts.vendor')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>Vendor Dashboard</strong></h1>
        <h3 class=""><strong>Food More Detail</strong></h3>

        <div class="my-5">
            <p><span class="fw-bolder">Food Category:</span> {{ $food->category->name }}</p>
            <p><span class="fw-bolder">Name:</span> {{ $food->name }}</p>
            <p><span class="fw-bolder">Description:</span> {{ $food->description }}</p>
            <p><span class="fw-bolder">Price:</span> {{ $food->price }}</p>
            <p><span class="fw-bolder">Discount:</span> {{ $food->discount }}</p>
            <p><span class="fw-bolder">Images</p>
            @foreach ($food->images as $image)
                <img class="thumbnail m-5" width="15%" src="{{ asset('storage/images/foods/' . $image) }}"
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
