@extends('layouts.main')
@section('container')
    <h1 class="text-center">Halaman Hitung</h1>
    <h3 class="mt-5">Bobot Lokal</h3>
    <table class="table mt-3 text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">CPU</th>
                <th scope="col">GPU</th>
                <th scope="col">RAM</th>
                <th scope="col">Penyimpanan</th>
                <th scope="col">SSD</th>
                <th scope="col">HDD</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tks as $tk)
            <tr>
                <th scope="row">{{ $tk->id }}</th>
                <td>{{ $tk->cpu_lokal }}</td>
                <td>{{ $tk->gpu_lokal }}</td>
                <td>{{ $tk->ram_lokal }}</td>
                <td>{{ $tk->storage_lokal }}</td>
                <td>{{ $tk->ssd_lokal }}</td>
                <td>{{ $tk->hdd_lokal }}</td>
                <td>{{ $tk->harga_lokal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3 class="mt-5">Bobot Global</h3>
    <table class="table mt-3 text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">CPU</th>
                <th scope="col">GPU</th>
                <th scope="col">RAM</th>
                <th scope="col">SSD</th>
                <th scope="col">HDD</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tks as $tk)
            <tr>
                <th scope="row">{{ $tk->id }}</th>
                <td>{{ $tk->cpu_global }}</td>
                <td>{{ $tk->gpu_global }}</td>
                <td>{{ $tk->ram_global }}</td>
                <td>{{ $tk->ssd_global }}</td>
                <td>{{ $tk->hdd_global }}</td>
                <td>{{ $tk->harga_global }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection