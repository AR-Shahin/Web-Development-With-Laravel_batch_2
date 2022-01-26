<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function getSession()
    {
        session()->all();
        if (session()->has('name')) {
        }
        if (session()->exists('name')) {
        }
        session('name');
        echo Session::get('age');
        return Session::get('name', 'Default name');
    }
    public function setSession()
    {
        session()->put('name', 'ARS');
        // Session::flash('age', 21);
        // Session::put('name', 'Shahin');
    }
    public function deleteSession()
    {
        Session::forget('name');
        Session::flush();
    }
}
