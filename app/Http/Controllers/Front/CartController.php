<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $productId = (int) $request->input('product_id');
        $quantity = (int) $request->input('quantity',1);


        try {
            $product = Product::findOrFail($productId);
            Cart::where([['product_id', $productId], ['user_id', Auth::id()]])->delete();

            $item = Cart::where([['product_id', $productId], ['user_id', Auth::id()]])->first();
            if ($item) {
                $item->quantity = $quantity; 
                $item->save();
            } else{

                $cart_products = new Cart();
                $cart_products->product_id = $productId;
                $cart_products->quantity = $quantity;
                $cart_products->price = (int) $product['price'];
                $cart_products->user_id = Auth::user()->id;

                $cart_products->save();
            }
        } catch (\PDOException $e) {
            return redirect()->back()->with('error', 'Could not add product to cart.');
        }

        return redirect()->back()->with('success', 'Product added to cart');
    }

}
