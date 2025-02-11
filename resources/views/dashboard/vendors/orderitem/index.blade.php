@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">Item</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    @foreach ($order->orderitem as $item)

                        <tr style="background: none">
                            <td> {{ $item->order->user->name }} </td>
                            <td> {{ $item->order->order_number }} </td>
                            <td> {{ $item->food->name }} </td>
                            <td> {{ $item->price }} </td>
                            <td> {{ $item->quantity }} </td>
                            
                        </tr>
                    @endforeach
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
