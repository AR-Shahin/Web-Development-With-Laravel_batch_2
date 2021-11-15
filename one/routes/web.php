<?php

use App\Test;
use Illuminate\Support\Facades\Route;



// Route::view('/', 'welcome');

Route::get('/', function (Test $test) {


    return view('welcome');
})->middleware('custom_middleware:10');

Route::any('any_route', function () {

    return "Any Route";
})->name('any_route');

Route::get('/user/{name?}', function ($name = null) {
    return $name;
});
Route::match(['get', 'put'], '/match', function () {
    //
});
Route::get('another', function () {
    return "Another Page";
})->name('another_route');
// Route::get('test', function () {
//     return "Test";
// });

// Route::redirect('/', 'test', 301);
// Route::put('test', function () {
//     return "Test";
// });

// Route::delete('test', function () {
//     return "Test";
// });




Route::prefix('category')->middleware('auth')->group(function () {

    Route::get('/index', function () {
        return "Index";
    });
    Route::get('/show', function () {
        return "Index";
    });
    Route::get('/store', function () {
        return "Index";
    });
    Route::get('/update', function () {
        return "Index";
    });
});


Route::fallback(function () {

    return "This route is not available!!";
});
