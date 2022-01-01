<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('login', [AuthController::class, 'login'])->name('login')->middleware(['guest']);
Route::post('login', [AuthController::class, 'authenticate'])->name('login')->middleware(['guest']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware(['auth']);
Route::get('register', [AuthController::class, 'register'])->name('register')->middleware(['guest']);
Route::post('register', [AuthController::class, 'store'])->name('register')->middleware(['guest']);

// Email Verification

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

use Illuminate\Http\Request;

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
