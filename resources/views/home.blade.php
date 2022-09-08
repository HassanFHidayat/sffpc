@extends('layouts.main')
@section('container')
<div class="flex-row border mb-4">
    <div class="d-flex flex-column justify-content-center align-items-center text-center" style="min-height: 75vh">
        <div>
            <h1>Selamat Datang di Website Sistem Pendukung Keputusan Small-Form-Factor Personal Computer</h1>
        </div>
        @can('pembeli')
            <div>
                <h3>Silahkan menuju ke halaman <a href="/rekomendasi" class="text-decoration-none">rekomendasi</a> untuk input tingkat kepentingan dan mendapatkan rekomendasi</h3>
            </div>
        @endcan
        @can('penjual')
            <div>
                <h3>Silahkan menuju ke halaman <a href="/dashboard" class="text-decoration-none">dashboard</a> untuk menginputkan data SFF-PC sehingga dapat digunakan sebagai alternatif</h3>
            </div>
        @endcan
        @guest
        <div>
            <h3>Silahkan <a href="/login" class="text-decoration-none">Login</a> untuk menggunakan website ini</h3>
        </div>
        <div>
            <h3>Jika belum punya akun, silahkan <a href="/register" class="text-decoration-none">daftar<a> terlebih dahulu</h3>
        </div>
        @endguest
    </div>
</div>
{{-- memebuat home untuk pembeli ketika sudah login --}}
@endsection