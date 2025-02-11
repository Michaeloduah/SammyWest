@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center">Confirm Password</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('password.confirm') }}">
            @csrf
    
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <div class="flex justify-end mt-4">
                <x-primary-button>
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
@endsection