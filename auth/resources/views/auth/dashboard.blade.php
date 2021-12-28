@extends('layout.app')

@section('title','User Dashboard')

@section('main_content')
<div class="container mt-5">
    <h1>Hi , {{ auth()->user()->name ?? 'NULL' }}</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
</div>
@stop
