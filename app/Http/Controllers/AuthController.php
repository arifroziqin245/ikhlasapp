<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login', [
            'active' => 'login',
            'title' => "Login",
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 1) {
                return redirect('/');
            } elseif(auth()->user()->role == 2) {
                return redirect('/sales');
            }else{
                return redirect('/boss');
            }
        }
        return back()->with('loginError', ' Username atau password anda salah');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('success', 'anda berhasil logout');
    }
}
