@extends('layouts.vendor')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>All Categories</strong></h1>
        <div class="m-4 ">
            <a href="{{ route('vendor.dashboard.category.create') }}"><button class="btn btn-outline-info btn-sm"><i
                        class="bi bi-plus"></i> Add New Category</button></a>
        </div>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Category Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr style="background: none">
                        <td> {{ $category->name }} </td>
                        <td> <img src="{{ asset('storage/' . $category->image) }}" width="30%" class="img-fluid"
                                alt=""> </td>
                        <td>
                            <a href="{{ route('vendor.dashboard.category.show', $category->id) }}"><button
                                    class="btn btn-sm btn-outline-success m-1"><i class="bi bi-pencil-square"></i>More Info</button></a>
                            <a href="{{ route('vendor.dashboard.category.edit', $category->id) }}"><button
                                    class="btn btn-sm btn-outline-info m-1"><i class="bi bi-pencil-square"></i>Edit</button></a>
                            <a href="{{ route('vendor.dashboard.category.destroy', $category->id) }}"><button
                                    class="btn btn-sm btn-outline-danger m-1"><i class="bi bi-trash"></i>Delete</button></a>
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

    </div>
@endsection
