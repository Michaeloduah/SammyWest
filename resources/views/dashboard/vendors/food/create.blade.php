@extends('layouts.vendor')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>Vendor Dashboard</strong></h1>
        <h3 class=""><strong>Add Foods</strong></h3>
        <div class="my-5">

            <form method="POST" action="{{ route('vendor.dashboard.food.store') }}" enctype="multipart/form-data"
                id="myForm">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                    <select class="form-select" name="category_id" id="category" value={{ old('category') }}>
                        <option>Select Your Category</option>
                        @foreach ($categories as $category)
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                @if ($errors->has('category'))
                    <span class="error text-danger">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('category') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Food Name:</label>
                    <input type="text" name="name" class="form-control" id="name" value={{ old('name') }}>
                </div>
                @if ($errors->has('name'))
                    <span class="error text-danger">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('name') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" name="description" id="description" rows="3" value={{ old('description') }}></textarea>
                </div>
                @if ($errors->has('description'))
                    <span class="error text-danger">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('description') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="image[]" class="form-label">Image:</label>
                    <input type="file" name="image[]" class="form-control" id="image[]" multiple required>
                </div>
                @if ($errors->has('image[]'))
                    <span class="error text-danger">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('image[]') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" name="price" class="form-control" id="price" min="0"
                        value={{ old('price') }}>
                </div>
                @if ($errors->has('price'))
                    <span class="error text-danger">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('price') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="discount" class="form-label">Discount:</label>
                    <input type="number" name="discount" class="form-control" id="discount" min="0"
                        value={{ old('discount') }}>
                </div>
                @if ($errors->has('discount'))
                    <span class="error text-danger">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('discount') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="processing_time" class="form-label">Preparation Time (Minutes):</label>
                    <input type="number" name="processing_time" class="form-control" id="processing_time" min="0"
                        value={{ old('processing_time') }}>
                </div>
                @if ($errors->has('processing_time'))
                    <span class="error text-danger">
                        <span class="section-subtitle"
                            style="margin-inline: 0px">{{ $errors->first('processing_time') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="ready_made" class="form-label">Ready Made:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ready_made" value="Yes" id="ready_made1">
                        <label class="form-check-label" for="ready_made1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ready_made" value="No" id="ready_made2">
                        <label class="form-check-label" for="ready_made2">
                            No
                        </label>
                    </div>
                </div>
                @if ($errors->has('ready_made'))
                    <span class="error text-danger">
                        <span class="section-subtitle"
                            style="margin-inline: 0px">{{ $errors->first('ready_made') }}</span>
                    </span>
                @endif



                <button class="btn btn-sm btn-outline-info mt-3" type="submit">Create Food</button>

            </form>

        </div>
    </div>
@endsection
