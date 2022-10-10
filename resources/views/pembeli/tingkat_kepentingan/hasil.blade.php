@extends('layouts.main')
@section('container')
<div class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom mb-3">
    <div class="col">
        <h1 class="my-4 text-center">Rekomendasi</h1>
        {{-- <a href="/rekomendasi/create" class="btn btn-primary">Create</a> --}}
    </div>
</div>
<div class="row">
    @foreach($hasils as $h)
    <div class="col-md-4 d-flex align-content-center justify-content-center mb-3">
        <div class="card shadow">
            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                {{-- <span class="text-white font-weight-bold">{{ $loop->iteration }}.</span> --}}
                <span class="text-white">{{ $h->nama }}</span>
            </div>
            <img src="{{ asset('storage/'.$h->image) }}" class="card-img-top" alt="{{ $h->nama }}">
            {{-- <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div> --}}
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Rank {{ $loop->iteration }}</li>
                <li class="list-group-item">CPU {{ $h->cpu->nama }}</li>
                <li class="list-group-item">GPU {{ $h->gpu->nama }}</li>
                <li class="list-group-item">RAM {{ $h->kapasitas_ram }}GB</li>
                <li class="list-group-item">SSD {{ $h->kapasitas_ssd }}GB</li>
                <li class="list-group-item">HDD {{ $h->kapasitas_hdd }}GB</li>
                <li class="list-group-item">Rp{{ number_format($h->harga, 0, ',', '.') }}</li>
            </ul>
            <div class="card-body">
                <a href="{{ $h->link }}" class="card-link">Source</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col d-flex justify-content-center">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection