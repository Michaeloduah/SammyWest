@extends('layouts.vendor')

@section('content')
    <div class="container">
        <h3 class=""><strong>All Foods</strong></h3>
        <div class="m-4 ">
            <a href="{{ route('vendor.dashboard.food.create') }}"><button class="btn btn-outline-info btn-sm"><i
                        class="bi bi-plus"></i> Add New Food</button></a>
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
                @foreach ($foods as $food)
                    <tr style="background: none">
                        <td> {{ $food->created_at }} </td>
                        <td> {{ $food->category->name }} </td>
                        <td> {{ $food->name }} </td>
                        <td> {{ $food->description }} </td>
                        <td> {{ $food->price }} </td>
                        <td> {{ $food->discount }} </td>
                        <td> <img src="{{ asset('storage/images/foods/' . $food->images[0]) }}" width="100%"
                                class="img-fluid" alt=""> </td>
                        <td> {{ $food->processing_time }} minutes </td>
                        <td> {{ $food->ready_made }} </td>
                        <td>
                            <a href="{{ route('vendor.dashboard.food.show', $food->id) }}"><button
                                    class="btn btn-sm btn-outline-success m-1"><i class="bi bi-pencil-square"></i>More
                                    Details</button></a>
                            <a href="{{ route('vendor.dashboard.food.edit', $food->id) }}"><button
                                    class="btn btn-sm btn-outline-info m-1"><i
                                        class="bi bi-pencil-square"></i>Edit</button></a>
                            <a href="{{ route('vendor.dashboard.food.destroy', $food->id) }}"><button
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
