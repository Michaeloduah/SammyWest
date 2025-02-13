@extends('layouts.vendor')

@section('content')
    <div class="container">
        <h3 class=""><strong>All Products</strong></h3>
        <div class="m-4 ">
            <a href="{{ route('vendor.dashboard.product.create') }}"><button class="btn btn-outline-info btn-sm"><i
                        class="bi bi-plus"></i> Add New Product</button></a>
        </div>

        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Date Created</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Image</th>
                    <th scope="col">Preparation Time </th>
                    <th scope="col">Ready Made</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr style="background: none">
                        <td> {{ $product->created_at }} </td>
                        <td> {{ $product->category->name }} </td>
                        <td> {{ $product->name }} </td>
                        <td> {{ $product->description }} </td>
                        <td> {{ $product->price }} </td>
                        <td> {{ $product->discount }} </td>
                        <td> <img src="{{ asset('storage/images/products/' . $product->images[0]) }}" width="100%"
                                class="img-fluid" alt=""> </td>
                        <td> {{ $product->processing_time }} minutes </td>
                        <td> {{ $product->ready_made }} </td>
                        <td>
                            <a href="{{ route('vendor.dashboard.product.show', $product->id) }}"><button
                                    class="btn btn-sm btn-outline-success m-1"><i class="bi bi-pencil-square"></i>More
                                    Details</button></a>
                            <a href="{{ route('vendor.dashboard.product.edit', $product->id) }}"><button
                                    class="btn btn-sm btn-outline-info m-1"><i
                                        class="bi bi-pencil-square"></i>Edit</button></a>
                            <a href="{{ route('vendor.dashboard.product.destroy', $product->id) }}"><button
                                    class="btn btn-sm btn-outline-danger m-1" onclick="confirmDelete()"><i class="bi bi-trash"></i>Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
