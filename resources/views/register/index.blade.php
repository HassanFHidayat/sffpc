@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" value="{{ old('nama') }}" required>
                        <label for="nama">Nama</label>
                    </div>
                    @error('nama')
                        {{ $message }}
                    @enderror
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required>
                        <label for="username">Username</label>
                    </div>
                    @error('username')
                        {{ $message }}
                    @enderror
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Daftar</button>
                </form>
                <small class="mt-3 d-block text-center">
                    Sudah punya akun? <a href="/login">Silahkan login!</a>
                </small>
            </main>
        </div>
    </div>
@endsection