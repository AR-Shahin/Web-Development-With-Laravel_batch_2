<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $carts = auth('customer')->user()->carts;
        return view('frontend.cart.index', compact('carts'));
    }

    public function store(Request $request, Product $product)
    {
        $cart =  Cart::whereCustomerId(auth('customer')->id())->whereProductId($product->id)->first();
        if ($cart) {
            $cart->quantity++;
            $cart->price = $cart->quantity * $cart->product->sell_price;
            $cart->save();
        } else {
            auth('customer')->user()->carts()->create([
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->sell_price
            ]);
        }
        session()->flash('success', 'Product Added Successfully!');
        return redirect()->route('cart.index');
    }

    public function delete(Cart $cart)
    {
        $cart->delete();
        session()->flash('success', 'Product Deleted Successfully!');
        return redirect()->route('cart.index');
    }

    public function update(Request $request, Cart $cart)
    {
        $cart->quantity = $request->qty;
        $cart->price = $cart->quantity * $cart->product->sell_price;
        $cart->save();
        session()->flash('success', 'Cart Updated Successfully!');
        return redirect()->route('cart.index');
    }
}
