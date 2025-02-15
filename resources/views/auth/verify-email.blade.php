@extends('layouts.homepage')

@section('content')
    <main id="main">
        <div class="verify">
            <img src="./assets/images/Lifesaver.png" class="img-fluid mt-5 verify-img" alt="" />
            <h1 class="text-center">Let's Verify you are human</h1>
            <p class="text-center">Kindly open your gmail and click on the verification link to verify your account </p>
            <form enctype="multipart/form-data" method="POST" action="{{ route('verification.send') }}" class="my-2">
                @csrf
                <p class="text-center">Didn't give a verification mail
                    <button type="submit" class="btn btn-sm btn-outline-info">Click Here</button>
                </p>
            </form>
            <form enctype="multipart/form-data" method="POST" action="{{ route('logout') }}" class="my-2">
                @csrf
                <p class="text-center">
                    Used the wrong account?
                    <button type="submit" class="btn btn-sm btn-outline-danger">Logout</button>
                </p>
            </form>
        </div>
    </main>
@endsection
