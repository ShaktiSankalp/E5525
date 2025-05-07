<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;

Route::get('/cart/add', [CartController::class, 'addProduct'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

Route::get('/', function () {
    return view('welcome');
});
