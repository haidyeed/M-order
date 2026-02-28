<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display home page.
     * 
     * @return Renderable
     */
    public function showHome(){
        return view('front.home');
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
