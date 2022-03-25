<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventEmptyOrder
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $cartItems = auth('customer')->user()->carts()->count();
        if ($cartItems  == 0) {

            session()->flash('warning', "Don't try to be smart!");
            return redirect()->route('home');
        }
        return $next($request);
    }
}
