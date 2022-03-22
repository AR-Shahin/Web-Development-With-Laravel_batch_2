@extends('layouts.frontend_app')
@section('ttitle', 'Customer Login')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <h3 class="text-center">Customer Login</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('customer.authenticate') }}" method="POST">
                            @csrf
                            <div class="my-2">
                                <label for="">Email : </label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    value="{{ old('namemaile') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <label for="">Password : </label>
                                <input type="text" class="form-control" name="password" placeholder="password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <button class="btn btn-block btn-success">Login</button>
                            </div>
                            <a href="{{ route('customer.register') }}" class="btn btn-link">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
