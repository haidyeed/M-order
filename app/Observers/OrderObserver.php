<?php

namespace App\Observers;

use App\Models\Order;
use Illuminate\Support\Facades\Log;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        //Note:: this is a very direct and simple observer to re-increase the product stock 
        //but it's not the best way for handling stock management and calculations

        //TODO:: Here we need to handle some cases of re-changing the status more than once 
        // and if we need to empty the order_products in this case 
        // According to my code this will not be visible in dashboard anymore if deleted 

        //all cases can be handled by creating a stock transactions table for each status change 
        //and a scheduled job or command to re-calulate the stocks every day and ensure the stock numbers

        if ($order->isDirty('status') && $order->status === 'refunded') { 
            foreach ($order->products as $product) { 
                $product->stock += $product->pivot->quantity; 
                $product->save(); 
            }
            
            Log::channel('order')->info("order refunded", ['orderId' => $order['id']]);
        }
    }

    /**
     * Handle the Order "deleted" event.
     */
    public function deleted(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     */
    public function restored(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     */
    public function forceDeleted(Order $order): void
    {
        //
    }
}
