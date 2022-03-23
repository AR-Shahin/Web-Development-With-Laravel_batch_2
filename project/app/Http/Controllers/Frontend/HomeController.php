<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $f_products = Product::take(5)->latest()->get();
        return view('frontend.home', compact('f_products'));
    }
}
