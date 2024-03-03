<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function create () {

        return view ('loginform');

        
    }

    public function store(Request $request): RedirectResponse {

       $validated = $request -> validate ([

        'email'=>'required|email',
        'password' => 'required'

       ]);

       $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return redirect('/login')->with('error', 'Invalid credentials. Check the email address and password entered.');
        }

        return redirect('/dashboard')->with('success', 'Login successful');

    }
}
