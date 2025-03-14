@extends('layouts.vendor')

@section('content')
    <div class="container">        
        <h1 class="text-center">Admin Dashboard</h1>
        <h3 class="text-center">Create a New Product Categories</h3>

        <div class="my-5">
            <form enctype="multipart/form-data" action="{{ route('vendor.dashboard.category.update', $category->id) }}"
                method="POST">
                @csrf
                <label for="name" class="form-label">Category Name: </label>
                <input type="text" name="name" id="name" class="form-control" placeholder="{{ $category->name }}"
                    required>
                @if ($errors->has('name'))
                    <span class="error text-danger">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('name') }}</span>
                    </span>
                @endif

                <label for="image" class="form-label">Image: </label>
                <input type="file" name="image" id="image" value="Pending" class="form-control">
                @if ($errors->has('image'))
                    <span class="error text-danger">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('image') }}</span>
                    </span>
                @endif

                <button class="btn btn-sm btn-outline-info mt-3" type="submit">Update Category</button>
            </form>
        </div>
    </div>
@endsection