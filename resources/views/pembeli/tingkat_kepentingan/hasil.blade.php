@extends('layouts.main')
@section('container')
    <h3 class="mb-5 text-center">Rekomendasi</h3>
    {{-- <a href="/rekomendasi/create" class="btn btn-primary">Create</a> --}}
    <table class="table mt-3 text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">CPU</th>
                <th scope="col">GPU</th>
                <th scope="col">RAM</th>
                <th scope="col">SSD</th>
                <th scope="col">HDD</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hasils as $hasil)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $hasil->nama }}</td>
                <td>{{ $hasil->cpu->nama }}</td>
                <td>{{ $hasil->gpu->nama }}</td>
                <td>{{ $hasil->kapasitas_ram }}GB</td>
                <td>{{ $hasil->kapasitas_ssd }}GB</td>
                <td>{{ $hasil->kapasitas_hdd }}GB</td>
                <td>Rp{{ number_format($hasil['harga'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection