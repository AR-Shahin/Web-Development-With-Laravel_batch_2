@extends('layout.app')

@section('title','User Reset Password')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h4 class="text-center">User Reset Password</h4>
            @if(session('status'))
            <span class="text-success">{{ session('status') }}</span>
            @endisset
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="form-group my-4">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-sm btn-success btn-block">Submit</button>
                </div>
            </form>
            <a href="{{ route('register') }}" class="btn btn-link">Register</a>
        </div>
    </div>
</div>
@stop
