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
                <td>{{ $tk->Lcpu }}</td>
                <td>{{ $tk->Lgpu }}</td>
                <td>{{ $tk->Lram }}</td>
                <td>{{ $tk->Lstorage }}</td>
                <td>{{ $tk->Lssd }}</td>
                <td>{{ $tk->Lhdd }}</td>
                <td>{{ $tk->Lharga }}</td>
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
                <td>{{ $tk->Gcpu }}</td>
                <td>{{ $tk->Ggpu }}</td>
                <td>{{ $tk->Gram }}</td>
                <td>{{ $tk->Gssd }}</td>
                <td>{{ $tk->Ghdd }}</td>
                <td>{{ $tk->Gharga }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection