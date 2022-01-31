<?php

use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneTwoManyController;
use App\Models\District;
use App\Models\Mechanic;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/one-to-one', [OneToOneController::class, 'index']);
Route::get('/one-to-many', [OneTwoManyController::class, 'index']);
Route::get('/many-to-many', [ManyToManyController::class, 'index']);


Route::get('notify', [NotificationController::class, 'mail']);
Route::get('sms', [NotificationController::class, 'index']);


Route::get('has-one-through', function () {

    return Mechanic::with('car_owner')->find(1);
});

Route::get('has-many-through', function () {

    return District::withCount('villages')->find(2);
});
