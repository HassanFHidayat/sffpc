<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterPenjualController extends Controller
{
    public function index() {
        return view('register.penjual', [
            'title' => 'SPK SFF-PC | Register'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|min:4|max:255',
            'password' => 'required|min:8|max:255',
            'alamat' => 'required'
        ]);

        // dd('berhasil');

        $validatedData['role'] = 'penjual';

        $validatedData['password'] = Hash::make($validatedData['password']);

        if(User::where('username', '=', $validatedData['username'])->exists()) {
            return redirect('/register/penjual')->with('registerError', 'Gagal register, username sudah digunakan');
        } else {
            User::Create($validatedData);
            return redirect('/login/penjual')->with('success', 'Berhasil register, silahkan login');
        }
    }
}
