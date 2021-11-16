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
       <a href="{{ route('about') }}">About</a>

       <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <input type="text" name="name" placeholder="Enter Your Name"> <br>
            <input type="email" name="email" placeholder="Enter Your Email"> <br>
            <input type="file" name="image" > <br>

            <input type="password" name="password" placeholder="Enter Your Passwprd"> <br>
            <button>Submit</button>
       </form>
   </body>
</html>
