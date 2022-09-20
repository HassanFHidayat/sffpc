@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Alternatif</h1>
    </div>
    <table class="table mt-2 text-center">
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
    </table>
@endsection