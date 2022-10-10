@extends('layouts.main')
@section('container')
    <div class="row justify-content-center h-100">
        <div class="col-lg-5 d-flex">
            <main class="form-registration w-100 m-auto bg-white py-3 px-3 rounded shadow">
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
                        <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" value="{{ old('nama') }}" required>
                        <label for="nama">Nama</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <input type="hidden" name="alamat" id="alamat" value="Jl. Raya Janti Jl. Majapahit No.143, Jaranan, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55918">
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Daftar</button>
                </form>
                <small class="mt-3 d-block text-center">
                    Sudah punya akun? <a href="/login">Silahkan login!</a>
                </small>
            </main>
        </div>
    </div>
@endsection