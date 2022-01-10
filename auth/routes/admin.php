<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AdminAuthController::class, 'login'])->name('login')->middleware(['guest:admin']);
    Route::get('register', [AdminAuthController::class, 'register'])->name('register')->middleware(['guest:admin']);
    Route::post('login', [AdminAuthController::class, 'authenticate'])->name('login')->middleware(['guest:admin']);
    Route::post('register', [AdminAuthController::class, 'store'])->name('register')->middleware(['guest:admin']);

    Route::get('/email/verify', function () {
        return view('admin.auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('admin/login');
    })->middleware(['auth:admin', 'signed'])->name('verification.verify');



    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth:admin', 'throttle:6,1'])->name('verification.send');


    Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard')->middleware(['auth:admin', 'custom_verify']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout')->middleware(['auth:admin']);
});
