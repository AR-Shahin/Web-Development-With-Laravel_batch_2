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
                        <form action="{{ route('customer.logout') }}" method="POST">
                            @csrf

                            <div class="my-2">
                                <button class="btn btn-block btn-success">Logout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
