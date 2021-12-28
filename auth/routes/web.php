<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('login', [AuthController::class, 'login'])->name('login')->middleware(['guest']);
Route::post('login', [AuthController::class, 'authenticate'])->name('login')->middleware(['guest']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware(['auth']);
Route::get('register', [AuthController::class, 'register'])->name('register')->middleware(['guest']);
Route::post('register', [AuthController::class, 'store'])->name('register')->middleware(['guest']);
