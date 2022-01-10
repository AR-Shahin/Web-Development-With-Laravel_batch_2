<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Events\AdminRegisterEvent;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    function login()
    {
        return view('admin.auth.login');
    }
    function register()
    {
        return view('admin.auth.register');
    }

    public function store(Request $request)
    {
        $admin =  Admin::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        event(new AdminRegisterEvent($admin));

        return redirect()->route('admin.login');
    }

    function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'exists:admins,email'],
            'password' => ['required'],
        ]);


        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        } else {
            return back()->withErrors(['email' => 'Something is wrong!!']);
        }
    }

    function dashboard()
    {
        return view('admin.auth.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
