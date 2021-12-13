<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/user', [UserController::class, 'index']);

Route::get('/', [StudentController::class, 'index']);
