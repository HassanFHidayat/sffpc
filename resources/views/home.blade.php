@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col">
        <ul class="list-group list-group-flush rounded shadow">
            <li class="list-group-item">
                <h6>Sistem Pendukung Keputusan (SPK)</h6>
                <p class="text-justify">
                    Sistem pengukung keputusan (SPK) adalah sistem berbasis komputer yang interaktif, yang membantu pengambil keputusan memanfaatkan data dan model untuk menyelesaikan masalah – masalah yang tak terstruktur dan semi terstruktur (Turban, Liang dan Aronson, 2005).
                </p>
            </li>
            <li class="list-group-item">
                <h6>Small Form-Factor Personal Computer (SFF-PC)</h6>
                <p class="text-justify">
                    Tidak ada definisi yang disepakati secara universal, tetapi ada panduan tidak baku berkaitan dengan ukuran casing. Saat membahas tata letak internal dan ukuran casing PC, volume sering kali menjadi pertimbangan penting, dan biasanya diukur dalam liter. Tower desktop ATX standar biasanya berukuran sekitar 40-45 liter. Sebagai perbandingan, ukuran umum untuk SFF adalah sekitar separuhnya — 25 liter atau kurang.
                </p>
                <a href="https://www.intel.co.id/content/www/id/id/gaming/resources/small-form-factor-gaming-pc.html" class="text-decoration-none" target="_blank">Sumber</a>
            </li>
        </ul>
    </div>
    @guest
    <div class="col-md-5">
        <div class="card shadow">
            <div class="card-body">
                <main class="form-registration w-100 m-auto bg-white">
                    @if(session()->has('registerError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('registerError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" value="{{ old('nama') }}">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" name="alamat" id="alamat" value="Jl. Raya Janti Jl. Majapahit No.143, Jaranan, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55918">
                        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Daftar</button>
                    </form>
                    <small class="mt-3 d-block text-center">
                        Sudah punya akun? <a href="/login">Silahkan login!</a>
                    </small>
                </main>
            </div>
        </div>
    </div>
    @endguest
    {{-- <div class="d-flex flex-column justify-content-center align-items-center text-center pt-5">
        <div>
            <h1>Selamat Datang di Website Sistem Pendukung Keputusan Small Form-Factor Personal Computer</h1>
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
    </div> --}}
</div>
{{-- memebuat home untuk pembeli ketika sudah login --}}
@endsection