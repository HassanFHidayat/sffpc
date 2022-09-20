@extends('penjual.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Alternatif</h1>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @elseif(session()->has('delete'))
        <div class="alert alert-danger" role="alert">
            {{ session('delete') }}
        </div>
    @endif
    <a href="/dashboard/alternatif/create" class="btn btn-primary">Create</a>
    <table class="table mt-2">
        <thead class="table-dark text-center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">CPU</th>
                <th scope="col">GPU</th>
                <th scope="col">RAM</th>
                <th scope="col">SSD</th>
                <th scope="col">HDD</th>
                <th scope="col">Harga</th>
                <th scope="col">Source</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alt as $a)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $a->cpu->nama }}</td>
                <td>{{ $a->gpu->nama }}</td>
                <td class="text-center">{{ $a->kapasitas_ram }}GB</td>
                <td class="text-center">{{ $a->kapasitas_ssd }}GB</td>
                <td class="text-center">{{ $a->kapasitas_hdd }}GB</td>
                <td class="text-center">Rp{{ number_format($a->harga, 0, ',', '.') }}</td>
                <td class="text-center">
                    <a href="{{ $a->link }}" class="badge bg-primary border-0">
                        <span data-feather="link"></span>
                    </a>
                </td>
                <td class="text-center">
                    <a href="/dashboard/alternatif/{{ $a->id }}" class="badge bg-primary border-0">
                        <span data-feather="eye"></span>
                    </a>
                    <a href="/dashboard/alternatif/{{ $a->id }}/edit" class="badge bg-warning border-0">
                        <span data-feather="edit"></span>
                    </a>
                    <form action="/dashboard/alternatif/{{ $a->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                            <span data-feather="x-circle"></span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection