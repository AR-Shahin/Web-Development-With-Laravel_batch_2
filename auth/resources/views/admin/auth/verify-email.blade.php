@extends('layout.app')

@section('title','Admin Verify')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h4 class="text-center">Admin Verification Form</h4>
            <p>Fist you have to verify your email then you can access this application</p>
            <form action="{{ route('admin.verification.send') }}" method="POST">
                @csrf
                <button  class="btn btn-sm btn-primary">Send Verification Email</button>
            </form>
            <br>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        </div>
    </div>
</div>
@stop
