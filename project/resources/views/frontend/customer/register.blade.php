@extends('layouts.frontend_app')
@section('ttitle', 'Customer Register')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <h3 class="text-center">Register Login</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="POST">
                            @csrf
                            <div class="my-2">
                                <label for="">Name : </label>
                                <input type="text" class="form-control" name="name" placeholder="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <label for="">Email : </label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <label for="">Password : </label>
                                <input type="password" class="form-control" name="password" placeholder="password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <button class="btn btn-block btn-success">Login</button>
                                <a href="{{ route('customer.login') }}" class="btn btn-link">Login</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
