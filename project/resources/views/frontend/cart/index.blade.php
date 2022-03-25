@extends('layouts.frontend_app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                            @php
                                $total = 0;
                                $totalQty = 0;
                            @endphp
                            @forelse ($carts as $cart)
                                @php
                                    $total += $cart->price;
                                    $totalQty += $cart->quantity;
                                @endphp
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td><img src="{{ asset($cart->product->image) }}" alt="" width="100px"></td>
                                    <td>{{ $cart->product->name }}</td>
                                    <td>{{ $cart->product->sell_price }}</td>
                                    <td>{{ $cart->quantity }}</td>
                                    <td>{{ $cart->price }}</td>
                                    <th>
                                        <form action="{{ route('cart.update', $cart->id) }}" class="d-flex"
                                            method="POST">
                                            @csrf
                                            <input type="number" name="qty" class="d-inline" min="1">
                                            <button class="btn btn-sm btn-success d-inline">+</button>
                                        </form>
                                        <form action="{{ route('cart.delete', $cart->id) }}" class="d-inline d-flex"
                                            method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-danger">X</button>
                                        </form>
                                    </th>
                                </tr>
                            @empty
                            @endforelse
                            @if (count($carts))
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>{{ $totalQty }}</th>
                                    <th>{{ $total }}</th>
                                    <th><a href="{{ route('order.shipping') }}"
                                            class="btn btn-sm btn-success">Checkout</a></th>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
