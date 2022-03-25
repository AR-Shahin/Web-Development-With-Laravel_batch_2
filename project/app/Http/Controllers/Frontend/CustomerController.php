<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class CustomerController extends Controller
{
    public function login()
    {
        return view('frontend.customer.login');
    }
    public function register()
    {
        return view('frontend.customer.register');
    }
    public function dashboard()
    {
        return view('frontend.customer.dashboard');
    }
    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('customer.login');
    }

    public function authenticate(CustomerLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('customer.dashboard');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required'],
        ]);

        $user = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        Auth::guard('customer')->login($user);

        return redirect()->route('customer.dashboard');
    }

    public function orderPage()
    {
        $orders = auth('customer')->user()->orders;
        return view('frontend.customer.orders', compact('orders'));
    }
}
