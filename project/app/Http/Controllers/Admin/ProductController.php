<?php

namespace App\Http\Controllers\Admin;

use App\Action\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('backend.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::latest()->get();
        $colors = Color::latest()->get();
        $sizes = Size::latest()->get();
        return view('backend.product.create', compact('categories', 'colors', 'sizes'));
    }
    public function view(Product $id)
    {
        return $id;
        $products = Product::latest()->get();
        return view('backend.product.view', compact('products'));
    }
    public function edit()
    {
        $products = Product::latest()->get();
        return view('backend.product.edit', compact('products'));
    }

    public function categories($id)
    {
        $data = Category::find($id)->sub_categories;
        return response()->json([
            'data' => $data
        ]);
    }

    public function store(ProductRequest $request)
    {
        // return Product::find(1)->sliders;
        $product = Product::create([
            'name' => $request->name,
            'slug' => str($request->name)->slug(),
            'category_id' => $request->category_id,
            'sub_cat_id' => $request->sub_cat_id,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
            'description' => $request->description,
            'price' => $request->price,
            'sell_price' => $request->sell_price,
            'image' => File::upload($request->file('image'), 'product'),
        ]);

        foreach ($request->file('slider_images') as $image) {
            $product->sliders()->create([
                'image' => File::upload($image, 'product/slider')
            ]);
        }
        return redirect()->route('admin.product.index');
    }
}
