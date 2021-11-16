<?php

use App\Http\Controllers\HelperController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('about', [UserController::class, 'index'])->name('about');
Route::get('helper', HelperController::class)->name('helper');

// Product Resources

// Route::resource('product', ProductController::class);


Route::post('register', [UserController::class, 'register'])->name('register');
