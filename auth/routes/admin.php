<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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



    # Reset Password

    Route::get('/forgot-password', function () {

        // return 11;
        return view('admin.auth.forgot-password');
    })->middleware('guest')->name('password.request');


    Route::post('/forgot-password', function (Request $request) {

        // return $request->all();
        $request->validate(['email' => 'required']);

        $status = Password::broker('admins')->sendResetLink(
            $request->only('email')
        );
        //return $request->all();
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    })->middleware('guest:admin')->name('password.email');


    Route::get('/reset-password/{token}', function ($token) {
        return view('admin.auth.reset-password', ['token' => $token]);
    })->middleware('guest:admin')->name('password.reset');



    Route::post('/reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $status = Password::broker('admins')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                // event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('admin.login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    })->middleware('guest')->name('password.update');
});
