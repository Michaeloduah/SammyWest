@extends('layouts.homepage')

@section('content')
    <div class="container my-3">

        <div class="mt-3">
            @php
                $x = count($orders);
            @endphp

            @if ($x > 0)
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Date/Time Ordered</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr style="background: none">
                                <td> {{ $order->created_at->format('F j, Y, g:i a') }} </td>
                                <td> {{ $order->user->name }} </td>
                                <td> {{ $order->order_number }} </td>
                                <td> {{ $order->status }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h4 class="text-center fw-bold">No orders yet</h4>
            @endif
        </div>
    </div>

    </div>
@endsection
