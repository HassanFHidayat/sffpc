@extends('..layouts.main')
@section('container')
    <h3 class="mt-5">Alternatif</h3>
    <a href="/alternatif/create" class="btn btn-primary">Create</a>
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
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alt as $a)
            <tr>
                <th scope="row">{{ $a->id }}</th>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->cpu->nama }}</td>
                <td>{{ $a->gpu->nama }}</td>
                <td>{{ $a->kapasitas_ram }} GB</td>
                <td>{{ $a->kapasitas_ssd }} GB</td>
                <td>{{ $a->kapasitas_hdd }} GB</td>
                <td>Rp{{ number_format($a->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/alternatif/{{ $a->id }}/edit" class="btn btn-warning border-0">Edit</a>
                    <form action="/alternatif/{{ $a->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                            <span data-feather="x-circle">Hapus</span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection