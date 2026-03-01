<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlaceOrderRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Orders_products;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
     protected $cartService; 
     
     public function __construct(CartService $cartService) {
           $this->cartService = $cartService; 
     }

     public function order(PlaceOrderRequest $request) {

          $order = new Order;

          $order->user_id = Auth::id();
          $order->shipping_address = $request->address.$request->city.$request->country.$request->postal;
          $order->phone = $request->phone;
          $order->email = $request->email ?? null;
          $order->shipping_price = $request->shipping_price ?? 0;
          $order->notes = $request->notes;

          $cartSubtotal = $this->cartService->calculateSubTotal();
          $order->subtotal = $cartSubtotal; 
          $order->total = $cartSubtotal + $order->shipping_price;

          $order->save();

          $cartItems = $this->cartService->cartItems(); 

          if ($order->id) {
            if ($cartItems) {
                    foreach ($cartItems as $item) {
                         $orderProduct = new Orders_products;
                         $orderProduct->order_id = $order->id;
                         $orderProduct->product_id = $item->product_id;
                         $orderProduct->quantity = $item->quantity;
                         $orderProduct->price = $item->product->price;
                         $orderProduct->save();
                         if ($orderProduct->id) {
                         $cart = Cart::find($item->id);
                         $cart->delete();
                         $product = Product::find($item->product_id);
                         $stock = $product->stock;

                         if ($stock >= $item->quantity)
                              $product->update(['stock' => $stock - $item->quantity]);
                         else
                              $product->update(['stock' => 0]);
                         }

                    }

               }

          }

          return view('front.success');

     }

     /**
     * Display a listing of the resource.
     */
     public function index()
     {
          $orders = Order::paginate(10, ['*'], 'orderpage');
          return view('dashboard.orders.index', compact('orders'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param string $status
     * @return \Illuminate\Routing\Redirector
     */
    public function changeOrderStatus($id, $status)
    {
        $order = Order::find($id);
        $order->update(['status' => $status]);
        return redirect()->back();
    }

}