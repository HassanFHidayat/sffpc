@extends('../layouts.main')
@section('container')
<div class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
    <div class="col">
        <h1 class="text-center">Rekomendasi</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if($alternatif->count() && $tks->count())
        {{-- @can('done') --}}
            <h3 class="mt-3">Bobot Lokal</h3>
            {{-- <a href="/rekomendasi/create" class="btn btn-primary">Create</a> --}}
            <table class="table mt-1 text-center bg-white shadow">
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
                            <form action="/rekomendasi/{{ $tk->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                                    <span>Reset</span>
                                </button>
                            </form>
                            {{-- <a href="/rekomendasi/{{ $tk->id }}" class="btn btn-warning border-0">Reset</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h3 class="mt-3">Bobot Global</h3>
            <table class="table mt-1 text-center bg-white shadow">
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
            <form action="/rekomendasi/hasil" method="post" class="mt-4">
                @csrf
                <div class="row d-flex align-content-center justify-content-center">
                    <div class="col-auto">
                        <label for="jumlah" class="form-label">Jumlah Rekomendasi</label>
                        <select name="jumlah" id="jumlah" class="form-select mx-auto my-auto">
                            @foreach ($alternatif as $a)
                                <option value="{{ $loop->iteration }}">{{ $loop->iteration }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-content-center justify-content-center">
                        <button type="submit" class="btn btn-primary my-3">Hitung</button>
                    </div>
                </div>
            </form>
            {{-- <div class="row">
                <div class="col d-flex align-content-center justify-content-center">
                    <a href="/rekomendasi/hasil" class="btn btn-primary my-3">Hitung</a>
                </div>
            </div> --}}
        {{-- @endcan --}}
        @elseif ($alternatif->count() && !$tks->count())
        {{-- @cannot('done') --}}
        {{-- route /rekomendasi/create tidak dapat diakses oleh pembeli
            yang sudah pernah menginputkan tingkat kepentingan --}}
            {{-- <div class="row">
                <div class="col d-flex align-content-center justify-content-center">
                    <a href="/rekomendasi/create" class="btn btn-primary my-5">Input</a>
                </div>
            </div> --}}
            <script>window.location = "/rekomendasi/create";</script>
        {{-- @endcannot --}}
        @else
        {{-- @if(!$alternatif->count()) --}}
            <h3 class="text-center my-5">Tidak ada alternatif</h3>
        @endif
    </div>
</div>
@endsection