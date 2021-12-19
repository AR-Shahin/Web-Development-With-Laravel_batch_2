<?php

use App\Http\Controllers\OneToOneController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/one-to-one', [OneToOneController::class, 'index']);
