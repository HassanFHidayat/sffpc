@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Alternatif</h1>
    </div>
    <table class="table mt-2">
        {{-- <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">CPU</th>
                <th scope="col">GPU</th>
                <th scope="col">RAM</th>
                <th scope="col">SSD</th>
                <th scope="col">HDD</th>
                <th scope="col">Harga</th>
                <th scope="col">Source</th>
            </tr>
        </thead> --}}
        <tbody>
            @foreach ($alternatif as $a)
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $a->nama }}</td>
            </tr>
            <tr>
                <td>CPU</td>
                <td>:</td>
                <td>{{ $a->cpu->nama }}</td=>
            </tr>
            <tr>
                <td>GPU</td>
                <td>:</td>
                <td>{{ $a->gpu->nama }}</td>
            </tr>
            <tr>
                <td>RAM</td>
                <td>:</td>
                <td>{{ $a->kapasitas_ram }}GB</td>
            </tr>
            <tr>
                <td>SSD</td>
                <td>:</td>
                <td>{{ $a->kapasitas_ssd }}GB</td>
            </tr>
            <tr>
                <td>HDD</td>
                <td>:</td>
                <td>{{ $a->kapasitas_hdd }}GB</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>Rp{{ number_format($a->harga, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>Source</td>
                <td>:</td>
                <td>
                    <a href="{{ $a->link }}" class="badge bg-primary border-0">
                        <span data-feather="link"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
@endsection