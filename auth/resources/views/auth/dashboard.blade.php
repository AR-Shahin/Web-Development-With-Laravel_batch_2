@extends('layout.app')

@section('title','User Dashboard')

@section('main_content')
<div class="container mt-5">
    <h1>Hi , {{ auth()->user()->name ?? 'NULL' }}</h1>
    <hr>
    @can('isAdmin')
    <h4>Admin Portion</h4>
    @endcan
    @can('isEditor')
    <h4>Editor Portion</h4>
    @endcan
    @can('isVisitor')
    <h4>Visitor Portion</h4>
    @endcan

    @if(Gate::check('isAdmin') || Gate::check('isEditor'))
    <a href="{{ route('post.create') }}" class="btn btn-sm btn-success">Post Create</a>
    <hr>
    @endif
    {{-- @can(['isAdmin' or 'isEditor'])

    @endcan --}}
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
    <hr>
    @foreach ($posts as $post)
        <h5>{{ $post->title }} | {{ $post->user->name }} |
@can('update',$post)

<button>Edit</button>
@endcan
        </h5>
    @endforeach
</div>
@stop
