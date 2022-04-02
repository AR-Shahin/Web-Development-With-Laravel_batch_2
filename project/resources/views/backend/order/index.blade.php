@extends('layouts.backend_master')

@section('title', 'Product')

@section('master_content')
    <div class="card pt-3">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <h3>Manage Orders</h3>
                <div>
                    <a href="{{ route('admin.product.create') }}" class="btn btn-success">Add New Product</a>
                </div>
            </div>
            <table class="table table-bordered" id="productTable">
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>
                                {{ $order->unique_id }}
                            </td>
                            <td>
                                {{ $order->status }}
                            </td>
                            <td>
                                {{ $order->created_at->diffForHumans() }}
                            </td>
                            <td>
                                @if ($order->status == 'pending')
                                    <form action="{{ route('admin.order.status', $order->id) }}" class="d-inline"
                                        method="POST">
                                        @csrf
                                        <button class="btn btn-sm btn-success">Ongoing</button>
                                    </form>
                                @endif
                                <a href="{{ route('admin.order.details', $order->id) }}"
                                    class="btn btn-sm btn-info">View</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@push('js')
    <script>
        $('#productTable').DataTable();
    </script>
@endpush
