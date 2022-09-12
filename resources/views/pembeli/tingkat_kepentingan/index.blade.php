@extends('../layouts.main')
@section('container')
    <h1 class="text-center">Rekomendasi</h1>
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if($alternatif->count() && $tks->count())
    {{-- @can('done') --}}
        <h3 class="mt-5">Bobot Lokal</h3>
        {{-- <a href="/rekomendasi/create" class="btn btn-primary">Create</a> --}}
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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tks as $tk)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $tk->cpu_lokal }}</td>
                    <td>{{ $tk->gpu_lokal }}</td>
                    <td>{{ $tk->ram_lokal }}</td>
                    <td>{{ $tk->storage_lokal }}</td>
                    <td>{{ $tk->ssd_lokal }}</td>
                    <td>{{ $tk->hdd_lokal }}</td>
                    <td>{{ $tk->harga_lokal }}</td>
                    <td>
                        <a href="/rekomendasi/{{ $tk->id }}/edit" class="btn btn-warning border-0">Edit</a>
                        {{-- <form action="/rekomendasi/{{ $tk->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                                <span data-feather="x-circle">Hapus</span>
                            </button>
                        </form> --}}
                    </td>
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
                    <th scope="row">{{ $loop->iteration }}</th>
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
        <div class="row">
            <div class="col d-flex align-content-center justify-content-center">
                <a href="/rekomendasi/hasil" class="btn btn-primary my-3">Hitung</a>
            </div>
        </div>
    {{-- @endcan --}}
    @elseif ($alternatif->count() && !$tks->count())
    {{-- @cannot('done') --}}
    {{-- route /rekomendasi/create tidak dapat diakses oleh pembeli
        yang sudah pernah menginputkan tingkat kepentingan --}}
        <div class="row">
            <div class="col d-flex align-content-center justify-content-center">
                <a href="/rekomendasi/create" class="btn btn-primary my-5">Input</a>
            </div>
        </div>
    {{-- @endcannot --}}
    @else
    {{-- @if(!$alternatif->count()) --}}
        <h3 class="text-center my-5">Tidak ada alternatif</h3>
    @endif
@endsection