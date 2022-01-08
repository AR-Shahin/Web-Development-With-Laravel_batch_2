<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AdminAuthController::class, 'login'])->name('login');
    Route::get('register', [AdminAuthController::class, 'register'])->name('register');
    Route::post('login', [AdminAuthController::class, 'authenticate'])->name('login');
    Route::post('register', [AdminAuthController::class, 'store'])->name('register');

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/dashboard');
    })->middleware(['auth:admin', 'signed'])->name('verification.verify');



    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');


    Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
});
