<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController};
use App\Http\Controllers\Front\{UserController};
use App\Http\Controllers\Dashboard\{AdminController};

Route::get('/', function () {
    return view('welcome');
});

//Authentication Routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('user.register.show');
Route::post('/register', [AuthController::class, 'register'])->name('user.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('user.login.show');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');


// Logout Route
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
});


// User Routes
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/cart', [UserController::class, 'cart'])->name('cart');
});


//Admin Routes
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboad', [AdminController::class, 'dashboard'])->name('dashboard');
});