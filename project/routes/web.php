<?php

use App\Http\Controllers\Frontend\{
    CartController,
    CustomerController,
    ProductController,
    HomeController,
    OrderController
};

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin_auth.php';

Route::controller(ProductController::class)->prefix('product')->name('product.')->group(function () {
    Route::get('{product}', 'singleProduct')->name('single');
});


Route::controller(CustomerController::class)->prefix('customer')->name('customer.')->group(function () {

    Route::get('login', 'login')->name('login')->middleware(['guest:customer']);
    Route::post('authenticate', 'authenticate')->name('authenticate');
    Route::get('register', 'register')->middleware(['guest:customer'])->name('register');
    Route::post('store', 'store')->name('store');
    Route::get('orders', 'orderPage')->name('orders');
    Route::get('dashboard', 'dashboard')->middleware(['auth:customer'])->name('dashboard');
    Route::post('logout', 'logout')->middleware(['auth:customer'])->name('logout');
});

# Cart

Route::prefix('cart')->name('cart.')->controller(CartController::class)->middleware('auth:customer')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store/{product}', 'store')->name('store');
    Route::post('/update/{cart}', 'update')->name('update');
    Route::post('/delete/{cart}', 'delete')->name('delete');
});


# Order
Route::prefix('order')->name('order.')->middleware(['preventEmptyOrder', 'auth:customer'])->controller(OrderController::class)->group(function () {
    Route::get('shipping', 'shipping')->name('shipping');
    Route::post('store', 'store')->name('store');
    Route::get('details/{order}', 'details')->name('details');
});
