<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display home page.
     * 
     * @return Renderable
     */
    public function showHome(){
        $products = Product::active()->take(8)->get();
        return view('front.home',compact('products'));
    }

    /**
     * Display home page.
     * 
     * @return Renderable
     */
    public function showShop(){
        $products = Product::active()->paginate(12);
        return view('front.shop',compact('products'));
    }

    /**
     * Display cart page.
     * 
     * @return Renderable
     */
    public function cart(){
        return view('front.cart');
    }


    /**
     * Display checkout page.
     * 
     * @return Renderable
     */
    public function checkout(){
        return view('front.checkout');
    }

}
