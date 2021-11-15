<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
  <body>
      <h1>Laravel</h1>
      <a href="{{route('another_route')}}">Click </a>
      <a href="{{route('another_route')}}">Click </a>
      <a href="{{route('another_route')}}">Click </a>
      <a href="{{route('another_route')}}">Click </a>
      <br>
      <form action="{{ route('any_route') }}" method="POST">
    @csrf
        <input type="text" name="name">
        <button type="submit">Submit</button>
      </form>

</html>
