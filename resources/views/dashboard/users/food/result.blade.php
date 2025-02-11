@extends('layouts.user')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>User Dashboard</strong></h1>
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

            <p>Foods</p>
            <ul>
                @foreach ($foods as $food)
                    <li><span class="fw-bolder">Food Category:</span> {{ $food->category->name }}</li>
                    <li><span class="fw-bolder">Name:</span> {{ $food->name }}</li>
                    <li><span class="fw-bolder">Description:</span> {{ $food->description }}</li>
                    <li><span class="fw-bolder">Price:</span> {{ $food->price }}</li>
                    <li><span class="fw-bolder">Discount:</span> {{ $food->discount }}</li>
                    <li><span class="fw-bolder">Images</li>
                    @foreach ($food->images as $image)
                        <img class="thumbnail m-5" width="15%" src="{{ asset('storage/images/foods/' . $image) }}"
                            alt="">
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
@endsection
