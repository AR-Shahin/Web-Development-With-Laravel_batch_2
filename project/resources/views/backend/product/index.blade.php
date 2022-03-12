@extends('layouts.backend_master')

@section('title', 'Product')

@section('master_content')
    <div class="card pt-3">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <h3>Manage Products</h3>
                <div>
                    <a href="{{ route('admin.product.create') }}" class="btn btn-success">Add New Product</a>
                </div>
            </div>
            <table class="table table-bordered" id="productTable">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}
                            </td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <img src="{{ asset($product->image) }}" alt="" width="100px">
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.product.view', $product->slug) }}"
                                    class="btn btn-sm btn-success">View</a>
                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('admin.product.delete', $product->slug) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                                @if ($product->status)
                                    <form action="{{ route('admin.product.active', $product->slug) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <button class="btn btn-sm btn-danger">Inactive</button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.product.inActive', $product->slug) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <button class="btn btn-sm btn-info">Active</button>
                                    </form>
                                @endif
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
