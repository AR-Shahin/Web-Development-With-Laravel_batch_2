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
            <table class="table table-bordered">
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
                                <a href="{{ route('admin.product.view', $product->id) }}"
                                    class="btn btn-sm btn-success">View</a>
                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                                <a href="" class="btn btn-sm btn-info">Active</a>
                                <a href="" class="btn btn-sm btn-danger">Inactive</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
