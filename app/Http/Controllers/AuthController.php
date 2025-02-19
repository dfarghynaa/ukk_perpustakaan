<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Cek kredensial
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard'); // Redirect ke dashboard jika login sukses
        }

        // Jika gagal, kembalikan dengan error
        return back()->withErrors(['email' => 'Email atau password salah']);
    }
}