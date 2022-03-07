<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('backend.product.index', compact('products'));
    }
    public function create()
    {
        $products = Product::latest()->get();
        return view('backend.product.create', compact('products'));
    }
    public function view()
    {
        $products = Product::latest()->get();
        return view('backend.product.view', compact('products'));
    }
    public function edit()
    {
        $products = Product::latest()->get();
        return view('backend.product.edit', compact('products'));
    }
}
