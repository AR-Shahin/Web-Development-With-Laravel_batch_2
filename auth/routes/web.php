<?php

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Password;

Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
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

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


# Reset Password

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');


Route::post('/forgot-password', function (Request $request) {

    // return $request->all();
    $request->validate(['email' => 'required|email|exists:users,email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');


Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');



Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


// Route::resource('post', PostController::class)->middleware(['can:isAdmin', 'can:isEditor']);
Route::resource('post', PostController::class);


Route::put('/post/{post}', function (Post $post) {
    // The current user may update the post...
})->middleware('can:update,post');


Route::get('redis-get', [RedisController::class, 'getRedis']);
Route::get('redis-set', [RedisController::class, 'setRedis']);
Route::get('redis-delete', [RedisController::class, 'deleteRedis']);
Route::get('cache', [RedisController::class, 'cache']);
