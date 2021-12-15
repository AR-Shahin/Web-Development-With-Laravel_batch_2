<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/user', [UserController::class, 'index']);

Route::get('/', [CustomerController::class, 'index']);
