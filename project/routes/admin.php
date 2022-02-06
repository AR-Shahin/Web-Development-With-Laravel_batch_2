<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::view('test', 'layouts.backend_app');

    // Route::view('login', 'backend.auth.login');
    // Route::view('dashboard', 'backend.dashboard');


    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/all', [CategoryController::class, 'all'])->name('all');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
    });
});
