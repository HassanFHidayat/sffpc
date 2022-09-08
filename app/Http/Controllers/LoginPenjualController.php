<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPenjualController extends Controller
{
    public function index() {
        return view('login.penjual', [
            'title' => 'SPK SFF-PC | Login'
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // kalau pembeli redirect ke home /
            if(auth()->user()->role === 'penjual') {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
