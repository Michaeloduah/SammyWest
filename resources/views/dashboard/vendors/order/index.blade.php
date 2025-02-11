@extends('layouts.vendor')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>All Orders</strong></h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Date/Time Ordered</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Phone Number</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Shipping Address</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $order)
                    <tr style="background: none">
                        <td> {{ $order->created_at }} </td>
                        <td> {{ $order->user->name }} </td>
                        <td> {{ $order->user->phone }} </td>
                        <td> {{ $order->order_number }} </td>
                        <td> {{ $order->status }} </td>
                        <td> {{ $order->total_amount }} </td>
                        <td> {{ $order->shipping_address }} </td>
                        <td> {{ $order->payment_method }} </td>
                        <td> {{ $order->payment_status }} </td>
                        <td>
                            <a href="#"><button class="btn btn-sm btn-outline-success m-1"><i
                                        class="bi bi-pencil-square"></i>More Info</button></a>
                            <a href="#"><button class="btn btn-sm btn-outline-info m-1"><i
                                        class="bi bi-pencil-square"></i>Edit</button></a>
                            <a href="#"><button class="btn btn-sm btn-outline-danger m-1"><i
                                        class="bi bi-trash"></i>Delete</button></a>
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
