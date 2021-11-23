@extends('layouts.backend_master')

@section('master_content')

@php
    // dd($users);
@endphp
{{--
{{ $numbers[0] }}
{!! $text !!}


@for ($i = 0;$i< count($numbers);$i++)
{{ $numbers[$i] }}

@endfor

@if (false)
    ok
    @else
    No
    @php
        $var = 20
    @endphp
    @if ($var == 10)
        var is 10
        @elseif ($var == 20)
        var is 20
    @endif
@endif


@auth
    I am authenticate
@endauth

@guest
I am Guest
@endguest

@production

@endproduction
 <br> <br> --}}
 <br>
 <br>
{{-- <div class="row">
    <div class="col-md-5">
        @foreach ($users as $key=> $value)
            {{ $value }} {{ $loop->iteration }}
        @endforeach
    </div>
</div> --}}

<div class="row">
    <div class="col-md-6">
        <form action="{{ route('view') }}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{ old('name') }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
           </div>
           <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
           </div>
           <div class="form-group">
            <input type="password" class="form-control" name="confirmation_at" placeholder="Enter Your Password">
            @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
           </div>
           <div class="from-group">
               <input type="file" class="form-control" name="file">
               @error('file')
               <span class="text-danger">{{ $message }}</span>
           @enderror
           </div>
           <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
           </div>
           <div class="form-group">
            <button class="btn btn-block btn-success">Submit</button>
           </div>
        </form>
    </div>
</div>
@stop
