@extends('layout.app')

@section('title','User Login')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h4 class="text-center">User Register</h4>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group my-4">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="form-group my-4">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password Confirm" name="password_confirmation">
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-sm btn-success btn-block">Register</button>
                </div>
            </form>
            <a href="{{ route('login') }}" class="btn btn-link">Login</a>

        </div>
    </div>
</div>
@stop
