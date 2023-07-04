<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin()
    {
        if(Auth::user()) {
            return redirect('/admin/dashboard');
        }
        return view('pages.signin');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }

        return back()->with('error', 'Login failed');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
