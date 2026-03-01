<?php

namespace App\Providers;

use App\Models\Order;
use App\Observers\OrderObserver;
use App\Services\CartService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(CartService $cartService): void
    {
        Paginator::useBootstrap();

        Order::observe(OrderObserver::class);
        
        // Share cart data globally with all views 
        View::composer('*', function ($view) use ($cartService) { 
            $view->with('cartCount', $cartService->cartProductsCount()); 
            $view->with('cartItems', $cartService->cartItems()); 
            $view->with('cartSubtotal', $cartService->calculateSubTotal()); 
        });

    }
}
