<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|min:5',
        ]);
        if(Auth::attempt($request->only('email', 'password'))) {
            if(Auth::user()->role == 'customer') return redirect('/customer');
            return redirect()->route('dashboard');
        }
        return back()->with('error','Email atau Password Salah');
    }
    
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:225',
            'email' => 'required|string|email|max:225|unique:users',
            'password' => 'required|string|min:6',
            'password-confirm' => 'required|string|min:6|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('customer')->with('success', 'Akun berhasil dibuat');
    }
}
