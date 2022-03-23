<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function singleProduct(Product $product)
    {
        $product =  $product->load(['category', 'size', 'color', 'sub_category', 'sliders']);

        return view('frontend.single', compact('product'));
    }
}
