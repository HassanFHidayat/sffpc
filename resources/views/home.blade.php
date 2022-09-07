@extends('layouts.main')
@section('container')
<div class="flex-row border mb-4">
    <div class="d-flex flex-column justify-content-center align-items-center text-center" style="min-height: 75vh">
        <div>
            <h1>Selamat Datang di Website Sistem Pemilihan Keputusan Small-Form-Factor Personal Computer</h1>
        </div>
        <div>
            <h3>Silahkan <a href="/login" class="text-decoration-none">Login</a> untuk menggunakan website ini</h3>
        </div>
        <div>
            <h3>Jika belum punya akun, silahkan <a href="/register" class="text-decoration-none">daftar<a> terlebih dahulu</h3>
        </div>
    </div>
</div>
{{-- memebuat home untuk pembeli ketika sudah login --}}
@endsection