<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController};
use App\Http\Controllers\Front\{UserController,CartController,OrderController};
use App\Http\Controllers\Dashboard\{AdminController,ProductController};


//Authentication Routes
Route::middleware('guest')->group(function () {
Route::get('/register', [AuthController::class, 'showRegister'])->name('user.register.show');
Route::post('/register', [AuthController::class, 'register'])->name('user.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
});


//Front Routes
Route::get('/', [UserController::class, 'showHome'])->name('home');
Route::get('/shop', [UserController::class, 'showShop'])->name('shop');


// Logout Route
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


// User Routes
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/cart', [UserController::class, 'cart'])->name('cart');
    Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
    Route::post('/addToCart', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/order', [OrderController::class, 'order'])->name('order');
});


//Admin Routes
Route::group(['prefix' => 'admin','middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('dashboard');

    Route::get('/product/changeStatus/{id}', [ProductController::class, 'changeStatus'])->name('products.changeStatus');
    Route::get('/order/changeStatus/{id}/{status}', [OrderController::class, 'changeOrderStatus'])->name('change-order-status');

    Route::resources([
        'products' => ProductController::class,
        'orders' => OrderController::class,

    ]);
});

//logs viewer
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);