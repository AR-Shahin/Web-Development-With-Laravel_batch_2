<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', function () {

    return view('login');
});
Route::get('/dashboard', function () {

    return view('dashboard');
})->name('dashboard');


Route::get('/category', function () {

    return view('category');
})->name('category');
