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
            // return redirect()->intended('/dashboard');

            // kalau pembeli redirect ke home /
            if(auth()->user()->role === 'penjual') {
                return redirect()->intended('/dashboard/alternatif');
            } else {
                return redirect()->intended('/rekomendasi');
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
