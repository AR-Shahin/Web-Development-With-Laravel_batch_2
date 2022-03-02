<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::view('test', 'layouts.backend_app');

    // Route::view('login', 'backend.auth.login');
    // Route::view('dashboard', 'backend.dashboard');


    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/all', [CategoryController::class, 'all'])->name('all');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
        Route::post('category', [CategoryController::class, 'store'])->name('store');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('destroy');
        Route::post('/update/{category}', [CategoryController::class, 'update'])->name('update');
    });


    # Sub category

    Route::prefix('sub-cat')->name('sub-cat.')->controller(SubCategoryController::class)->group(function () {

        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::get('/all', 'getAllSubCat')->name('all');
        Route::get('/{id}', 'view')->name('view');
    });
});
