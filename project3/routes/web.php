<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [LoginController::class, 'loginForm'])->name('login')->middleware(middleware:'guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware(middleware:'guest');

Route::get('/logout', [LogoutController::class])->name('logout')->middleware(middleware:'auth');

Route::get('/register', [RegisterController::class, 'registerForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
