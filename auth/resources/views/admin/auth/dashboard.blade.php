@extends('layout.app')

@section('title','User Dashboard')

@section('main_content')
<div class="container mt-5">
    <h1>Hi , {{ auth('admin')->user()->name ?? 'NULL' }}</h1>

    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
</div>
@stop
