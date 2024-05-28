<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        return view( view: 'auth/login');
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate( rules: [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt(credentials: $credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(default: '/');
        }
 
        return back();
    }
}
