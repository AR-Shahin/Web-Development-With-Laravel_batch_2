@extends('layouts.backend_master')

@section('title', 'Product')

@section('master_content')
    <div class="card pt-3">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <h3>View Product</h3>
                <div>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
            <hr>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $product->category->name }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="{{ asset($product->image) }}" alt="" width="100px"></td>
                </tr>

                <tr>
                    <th>description</th>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $product->name }}</td>
                </tr>
            </table>

        </div>
    </div>
@stop
