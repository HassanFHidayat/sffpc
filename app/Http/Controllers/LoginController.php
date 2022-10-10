<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.pembeli', [
            'title' => 'SPK SFF-PC | Login'
        ]);
    }

    // buat method autentikasi
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // kalau penjual redirect ke dashboard
            if(auth()->user()->role === 'pembeli') {
                return redirect()->intended('/rekomendasi');
            } else {
                return redirect()->intended('/dashboard/alternatif');
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
