<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email:dns',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/');
    //     }

    //     return back()->with('loginError', 'Login Gagal');
    // }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials, (bool)  $request->remember_me)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $redirectUrl = $user->role == 'admin' ? '/admin' : '/';
            return redirect()->intended($redirectUrl);
            // return view('/frontend.layouts.dashboard-user');
        }

        return back()->with('loginError', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
