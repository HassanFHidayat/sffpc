@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Semua SFF-PC</h1>
    </div>
</div>
<div class="container fixed-bottom mb-3">
    {{-- <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <form action="/list/sort" method="post">
                        @csrf
                        <label for="sort" class="d-inline">Urutkan</label>
                        <select name="sort" id="sort" class="form-select" onchange="this.form.submit()">
                            @if($sort == '')
                                <option value="" selected>Reset</option>
                            @else
                                <option value="">Reset</option>
                            @endif
                            @if($sort == 'kecepatan_cpu')
                                <option value="kecepatan_cpu" selected>CPU Tertinggi ke Terendah</option>
                            @else
                                <option value="kecepatan_cpu">CPU Tertinggi ke Terendah</option>
                            @endif
                            @if($sort == 'kecepatan_gpu')
                                <option value="kecepatan_gpu" selected>GPU Tertinggi ke Terendah</option>
                            @else
                                <option value="kecepatan_gpu">GPU Tertinggi ke Terendah</option>
                            @endif
                            @if($sort == 'kapasitas_ram')
                                <option value="kapasitas_ram" selected>RAM Tertinggi ke Terendah</option>
                            @else
                                <option value="kapasitas_ram">RAM Tertinggi ke Terendah</option>
                            @endif
                            @if($sort == 'kapasitas_ssd')
                                <option value="kapasitas_ssd" selected>SSD Tertinggi ke Terendah</option>
                            @else
                                <option value="kapasitas_ssd">SSD Tertinggi ke Terendah</option>
                            @endif
                            @if($sort == 'kapasitas_hdd')
                                <option value="kapasitas_hdd" selected>HDD Tertinggi ke Terendah</option>
                            @else
                                <option value="kapasitas_hdd">HDD Tertinggi ke Terendah</option>
                            @endif
                            @if($sort == 'harga')
                                <option value="harga" selected>Harga Tertinggi ke Terendah</option>
                            @else
                                <option value="harga">Harga Tertinggi ke Terendah</option>
                            @endif
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<div class="row">
    @if($sort)
        @foreach($alternatifs->sortByDesc($sort) as $a)
        <div class="col-md-4 d-flex align-content-center justify-content-center mb-3">
            <div class="card shadow">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <span class="text-white">{{ $a->nama }}</span>
                </div>
                <img src="{{ asset('storage/'.$a->image) }}" class="card-img-top" alt="{{ $a->nama }}">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">CPU {{ $a->cpu->nama }}</li>
                    <li class="list-group-item">GPU {{ $a->gpu->nama }}</li>
                    <li class="list-group-item">RAM {{ $a->kapasitas_ram }}GB</li>
                    <li class="list-group-item">SSD {{ $a->kapasitas_ssd }}GB</li>
                    <li class="list-group-item">HDD {{ $a->kapasitas_hdd }}GB</li>
                    <li class="list-group-item">Rp{{ number_format($a->harga, 0, ',', '.') }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ $a->link }}" class="card-link">Source</a>
                </div>
            </div>
        </div>
        @endforeach
    @else
        @foreach($alternatifs as $a)
        <div class="col-md-4 d-flex align-content-center justify-content-center mb-3">
            <div class="card shadow">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <span class="text-white">{{ $a->nama }}</span>
                </div>
                <img src="{{ asset('storage/'.$a->image) }}" class="card-img-top" alt="{{ $a->nama }}">
                {{-- <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div> --}}
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">CPU {{ $a->cpu->nama }}</li>
                    <li class="list-group-item">GPU {{ $a->gpu->nama }}</li>
                    <li class="list-group-item">RAM {{ $a->kapasitas_ram }}GB</li>
                    <li class="list-group-item">SSD {{ $a->kapasitas_ssd }}GB</li>
                    <li class="list-group-item">HDD {{ $a->kapasitas_hdd }}GB</li>
                    <li class="list-group-item">Rp{{ number_format($a->harga, 0, ',', '.') }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ $a->link }}" class="card-link">Source</a>
                </div>
            </div>
        </div>
        @endforeach
    @endif
    {{-- @foreach($alternatifs as $a)
    <div class="col-md-4 d-flex align-content-center justify-content-center mb-3">
        <div class="card shadow">
            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                <span class="text-white">{{ $a->nama }}</span>
            </div>
            <img src="{{ asset('storage/'.$a->image) }}" class="card-img-top" alt="{{ $a->nama }}">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">CPU {{ $a->cpu->nama }}</li>
                <li class="list-group-item">GPU {{ $a->gpu->nama }}</li>
                <li class="list-group-item">RAM {{ $a->kapasitas_ram }}GB</li>
                <li class="list-group-item">SSD {{ $a->kapasitas_ssd }}GB</li>
                <li class="list-group-item">HDD {{ $a->kapasitas_hdd }}GB</li>
                <li class="list-group-item">Rp{{ number_format($a->harga, 0, ',', '.') }}</li>
            </ul>
            <div class="card-body">
                <a href="{{ $a->link }}" class="card-link">Source</a>
            </div>
        </div>
    </div>
    @endforeach --}}
</div>
{{-- <table class="table mt-2 text-center">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">CPU</th>
            <th scope="col">GPU</th>
            <th scope="col">RAM</th>
            <th scope="col">SSD</th>
            <th scope="col">HDD</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alternatifs as $a)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $a->cpu->nama }}</td=>
            <td>{{ $a->gpu->nama }}</td>
            <td>{{ $a->kapasitas_ram }}GB</td>
            <td>{{ $a->kapasitas_ssd }}GB</td>
            <td>{{ $a->kapasitas_hdd }}GB</td>
            <td>Rp{{ number_format($a->harga, 0, ',', '.') }}</td>
            <td>
                <a href="{{ $a->link }}" class="badge bg-primary border-0">
                    <span data-feather="link"></span>
                </a>
                <a href="/list/{{ $a->id }}" class="badge bg-primary border-0">
                    <span data-feather="eye"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> --}}
@endsection