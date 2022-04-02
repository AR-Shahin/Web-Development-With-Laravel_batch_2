<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('backend.order.index', compact('orders'));
    }

    public function details(Order $order)
    {
        $order = $order->load(['customer', 'shipping', 'order_details', 'payment']);
        return view('backend.order.details', compact('order'));
    }

    public function status(Order $order)
    {
        $order->status = 'received';
        $order->save();
        return back();
    }
}
