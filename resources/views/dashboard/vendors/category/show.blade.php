@extends('layouts.vendor')

@section('content')
    <div class="container">
        <h1 class="text-center">Admin Dashboard</h1>
        <h3 class="text-center">See all Category Details</h3>

        <h5>Category Name: {{ $category->name }}</h5>
        <img src="{{ asset('storage/' . $category->image) }}" width="30%" alt="" class="img-fluid img-rounded">
    </div>
@endsection
