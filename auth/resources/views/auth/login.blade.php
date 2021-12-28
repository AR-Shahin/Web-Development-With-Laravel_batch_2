@extends('layout.app')

@section('title','User Login')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h4 class="text-center">User Login</h4>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group my-4">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-sm btn-success btn-block">Login</button>
                </div>
            </form>
            <a href="{{ route('register') }}" class="btn btn-link">Register</a>
        </div>
    </div>
</div>
@stop
