<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin')->group(function () {

    Route::view('test', 'layouts.backend_app');

    // Route::view('login', 'backend.auth.login');
    // Route::view('dashboard', 'backend.dashboard');
});
