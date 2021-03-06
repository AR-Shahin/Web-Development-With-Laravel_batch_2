@extends('layout.app')

@section('title','User Reset Password')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ request()->route('token')  }}">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" value="{{ old('email', request()->email) }}" name="email" readonly>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control"  name="password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Confirm</label>
                    <input type="password" class="form-control"  name="password_confirmation">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Change</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
