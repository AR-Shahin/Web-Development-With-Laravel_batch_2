<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\OrderDetails;

class OrderController extends Controller
{
    private $order;
    function shipping()
    {
        return view('frontend.order.shipping');
    }

    public function store(Request $request)
    {

        DB::transaction(function () use ($request) {

            $shipping = Shipping::create($request->except(['payment_method', 'trans_id']));

            $payment = Payment::create([
                'method' => $request->payment_method,
                'total_amnt' => auth('customer')->user()->cartTotal(),
                'amount' => auth('customer')->user()->cartTotal(),
                'trans_id' => $request->trans_id ? $request->trans_id : null,
            ]);

            $this->order = Order::create([
                'unique_id' => rand(1, 5000),
                'customer_id' => auth('customer')->id(),
                'payment_id' => $payment->id,
                'shipping_id' => $shipping->id,
                'total' => auth('customer')->user()->cartTotal()
            ]);

            foreach (auth('customer')->user()->carts as $cart) {
                OrderDetails::create([
                    'order_id' => $this->order->id,
                    'product_id' => $cart->product_id,
                    'price' => $cart->price,
                    'quantity' => $cart->quantity,
                ]);

                $cart->delete();
            }
        });

        session()->flash('success', 'Order Created Successfully!');
        return redirect()->route('customer.dashboard');
    }


    public function details(Order $order)
    {

        $order = $order->load(['order_details', 'shipping', 'payment']);
        return view('frontend.order.details', compact('order'));
    }
}
