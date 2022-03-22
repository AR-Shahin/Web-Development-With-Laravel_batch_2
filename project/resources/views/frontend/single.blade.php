@extends('layouts.frontend_app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <img src="{{ asset($product->image) }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1>{{ $product->name }}</h1>
                <form action="">
                    <button class="btn btn-sm btn-success">Add To Cart</button>
                </form>
                <p>Category : {{ $product->category->name }}</p>
                <p>Sub Category : {{ $product->sub_category->name ?? '' }}</p>
                <p>Category : {{ $product->category->name }}</p>
                <p>Category : {{ $product->category->name }}</p>
                <p>{{ $product->description }}</p>
                <hr>
                <hr>

            </div>
        </div>
    </div>
@endsection
