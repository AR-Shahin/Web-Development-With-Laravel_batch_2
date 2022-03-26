@extends('layouts.frontend_app')
@section('ttitle', 'Customer Register')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <h3 class="text-center d-inline">Order Id : {{ $order->id }}
                    <span class="text-info">({{ $order->status }})</span>

                </h3> |
                <a href="{{ route('customer.orders') }}">Back</a>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <h5>Hello {{ auth('customer')->user()->name }}</h5>
                        <table class="table table-bordered">

                            <tr>
                                <th colspan="5" class="text-center">Shipping Address</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $order->shipping->name }}</td>
                                <th>Email</th>
                                <td>{{ $order->shipping->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $order->shipping->phone }}</td>
                                <th>City</th>
                                <td>{{ $order->shipping->city }}</td>
                            </tr>
                            <tr>
                                <th>Region</th>
                                <td>{{ $order->shipping->region }}</td>
                                <th>Address</th>
                                <td>{{ $order->shipping->address }}</td>
                            </tr>

                            <tr>
                                <th colspan="5" class="text-center">Payment</th>
                            </tr>
                            <tr>
                                <th>Method</th>
                                <td>{{ $order->payment->method }}</td>
                                <th>Ammount</th>
                                <td>{{ $order->payment->amount }}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>{{ $order->payment->total_amnt }}</td>
                                <th>Trans ID</th>
                                <td>{{ $order->payment->trans_id }}</td>
                            </tr>
                            <tr>
                                <th colspan="5" class="text-center">Order Details</th>
                            </tr>
                            <tr>
                                <th>SL</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                            @php
                                $total = 0;
                                $qty = 0;
                            @endphp
                            @foreach ($order->order_details as $details)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $details->product->name }}</td>
                                    <td>{{ $details->quantity }}</td>
                                    <td>{{ $details->product->sell_price }}</td>
                                    <td>{{ $details->product->sell_price * $details->quantity }}</td>

                                </tr>
                                @php
                                    $total += $details->product->sell_price * $details->quantity;
                                    $qty += $details->quantity;
                                @endphp
                            @endforeach

                            <tr>
                                <th colspan="3" class="text-right">
                                    Quantity : {{ $qty }}
                                </th>
                                <th colspan="3" class="text-right">
                                    Total : {{ $total }}
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
