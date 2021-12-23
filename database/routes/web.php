<?php

use App\Models\User;
use App\Events\UserCreatedEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Mail\SendMailToUser;
use Illuminate\Support\Facades\Mail;

Route::get('/user', [UserController::class, 'scope']);

// Route::get('/', [CustomerController::class, 'index']);


Route::get('new-user', function () {

    //  return new SendMailToUser;

    $user = User::create([
        'name' => 'Arif',
        'email' => 'arif1@mail.com',
        'password' => 123
    ]);
    event(new UserCreatedEvent($user));
    return 1;
});
