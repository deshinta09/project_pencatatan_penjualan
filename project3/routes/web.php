<?php

use App\Http\Controllers\OrderController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', function () {
    return view('orders', ['orders'=> Order::all()]);
});

Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');