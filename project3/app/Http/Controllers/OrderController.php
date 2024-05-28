<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required', 
            'code' => 'required', 
            'address' => 'required', 
            'subtotal' => 'required', 
            'discount' => 'required', 
            'total' => 'required'
        ]);

        $order = new Order;
        $order->customer_id = $validatedData['customer_id'];
        $order->code = $validatedData['code'];
        $order->address = $validatedData['address'];
        $order->subtotal = $validatedData['subtotal'];
        $order->discount = $validatedData['discount'];
        $order->total = $validatedData['total'];
        $order->save();

        return redirect()->route('orders.create')->with('success', 'Order created successfully!');
    }
}
