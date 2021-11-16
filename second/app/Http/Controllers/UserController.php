<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        return view('about');
    }

    public function register(Request $request)
    {
        // if ($request->hasFile('image')) {
        //     return 111;
        // }
        // return $path = $request->image->path();

        // return  $extension = $request->image->extension();

        $image = $request->image->extension();
        return $image;
        return  $request->file('image');
        return $request->all();
        if ($request->has('name')) {
            return "Yes";
        }
        return $request->except('email');
        return $request->fullUrl();
        if ($request->is('register')) {
            return "Ok";
        } else {
            return "No";
        }
        return $request->ip();
        return $request->only(['name', 'email']);
    }
}
