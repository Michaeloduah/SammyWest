@extends('layouts.homepage')

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
        {{-- <form action="{{ route('logout') }} " method="POST">
            @csrf
            <button class="btn btn-sm btn-outline-danger"> Logout</button>
        </form> --}}
    </div>
@endsection
