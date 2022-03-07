@extends('layouts.backend_master')

@section('title', 'Product')

@section('master_content')
    <div class="card pt-3">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <h3>Creage Product</h3>
                <div>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>

        </div>
    </div>
@stop
