<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required', 
            'email' => 'required', 
            'password' => 'required', 
            'phone' => 'required', 
            'address' => 'required', 
            'role' => 'required'
        ]);

        $customer = new Customer;
        $customer->name = $validatedData['name'];
        $customer->email = $validatedData['email'];
        $customer->password = $validatedData['password'];
        $customer->phone = $validatedData['phone'];
        $customer->address = $validatedData['address'];
        $customer->role = $validatedData['role'];
        $customer->save();

        return redirect()->route('customers.create')->with('success', 'Customer created successfully!');
    }
}
