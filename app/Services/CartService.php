<?php

namespace App\Services;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartService
{
    public function cartProductsCount()
    {
        return $this->query()->count();
    }

    public function cartItems()
    {
        return $this->query()->with('product')->get();

    }

    public function calculateSubTotal()
    {
        $subtotal = 0;

        $products = $this->query()->get();

        if ($products) {
            foreach ($products as $product) {
                $subtotal += ($product->price * $product->quantity);
            }
        }

        return $subtotal;

    }

    private function query()
    {
        $cartProducts = Cart::where('user_id', Auth::Id());
        return $cartProducts;

    }

}