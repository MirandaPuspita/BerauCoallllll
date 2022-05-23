<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.registrasi', ['title' => 'Register']);
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:255',
    //         'email' => 'required|email:dns|unique:users',
    //         'password' => 'required|min:5|max:255'
    //     ]);

    //     $validatedData['password'] = bcrypt($validatedData['password']);

    //     User::create($validatedData);

    //     // $request->session()->flash('success', 'Registrasi Berhasil, silahkan login!');
    //     return redirect('/login')->with('success', 'Registrasi Berhasil, silahkan login!');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:dns', 'unique:users,email'],
            'password' => ['required', 'min:5', 'max:255'],
            'role' => ['required'],
        ]);
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);

            Session::flash('success', 'Registrasi Berhasil, silahkan login!');

            return redirect()->intended('/login');
        } catch (\Throwable $th) {
            logger()->error($th->getMessage());
            Session::flash('error', 'An error occured. Please try again or contact administrator');
        }

        return back()->withInput();
    }
}
