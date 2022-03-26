@extends('layouts.frontend_app')
@section('ttitle', 'Customer Register')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <h3 class="text-center">Dashboard</h3>
                <div class="card">
                    <div class="card-body">
                        <h5>Hello {{ auth('customer')->user()->name }}</h5>
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Order ID</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Acitons</th>
                            </tr>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $order->unique_id }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('order.details', $order->id) }}" class="btn btn-sm btn-succesc"><i
                                                class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
