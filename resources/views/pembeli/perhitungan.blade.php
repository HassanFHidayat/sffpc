@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col">
        <h3 class="mt-3">matriks x</h3>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <table class="table mt-1 text-center bg-white shadow">
            <thead class="table">
                <tr class="align-middle">
                    <th scope="col" rowspan="2">nama_alternatif</th>
                    <th scope="col" rowspan="2">kecepatan_cpu</th>
                    <th scope="col" rowspan="2">kecepatan_gpu</th>
                    <th scope="col" rowspan="2">kapasitas_ram</th>
                    <th scope="col" colspan="2">penyimpanan</th>
                    <th scope="col" rowspan="2">harga</th>
                </tr>
                <tr>
                    <th scope="col">kapasitas_hdd</th>
                    <th scope="col">kapasitas_ssd</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matriks_x as $x)
                <tr>
                    <th scope="row">{{ 'A'.$loop->iteration }}</th>
                    <td>{{ $x->cpu->base_clock }}</td>
                    <td>{{ $x->gpu->base_clock }}</td>
                    <td>{{ $x->kapasitas_ram }}</td>
                    <td>{{ $x->kapasitas_ssd }}</td>
                    <td>{{ $x->kapasitas_hdd }}</td>
                    <td>{{ $x->harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <h3 class="mt-3">max dan min</h3>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <table class="table mt-1 text-center bg-white shadow">
            <thead class="table">
                <tr class="align-middle">
                    <th scope="col" rowspan="2">max_kecepatan_cpu</th>
                    <th scope="col" rowspan="2">max_kecepatan_gpu</th>
                    <th scope="col" rowspan="2">max_kapasitas_ram</th>
                    <th scope="col" colspan="2">penyimpanan</th>
                    <th scope="col" rowspan="2">min_harga</th>
                </tr>
                <tr>
                    <th scope="col">max_kapasitas_hdd</th>
                    <th scope="col">max_kapasitas_ssd</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $maxGhz }}</td>
                    <td>{{ $maxMhz }}</td>
                    <td>{{ $maxRam }}</td>
                    <td>{{ $maxSsd }}</td>
                    <td>{{ $maxHdd }}</td>
                    <td>{{ $minHarga }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <h3 class="mt-3">matriks normal (R)</h3>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <table class="table mt-1 text-center bg-white shadow">
            <thead class="table">
                <tr class="align-middle">
                    <th scope="col" rowspan="2">nama_alternatif</th>
                    <th scope="col" rowspan="2">normalisasi_kecepatan_cpu</th>
                    <th scope="col" rowspan="2">normalisasi_kecepatan_gpu</th>
                    <th scope="col" rowspan="2">normalisasi_kapasitas_ram</th>
                    <th scope="col" colspan="2">normalisasi_penyimpanan</th>
                    <th scope="col" rowspan="2">harga</th>
                </tr>
                <tr>
                    <th scope="col">normalisasi_kapasitas_hdd</th>
                    <th scope="col">normalisasi_kapasitas_ssd</th>
                </tr>
            </thead>
            <tbody>
                @foreach($normalisasi as $n)
                <tr>
                    <th scope="row">{{ 'A'.$loop->iteration }}</th>
                    <td>{{ $n->normalisasi_kecepatan_cpu }}</td>
                    <td>{{ $n->normalisasi_kecepatan_gpu }}</td>
                    <td>{{ $n->normalisasi_kapasitas_ram }}</td>
                    <td>{{ $n->normalisasi_kapasitas_ssd }}</td>
                    <td>{{ $n->normalisasi_kapasitas_hdd }}</td>
                    <td>{{ $n->normalisasi_harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <h3 class="mt-3">nilai vektor</h3>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <table class="table mt-1 text-center bg-white shadow">
            <thead class="table">
                <tr class="align-middle">
                    <th scope="col" rowspan="2">nama_alternatif</th>
                    <th scope="col" rowspan="2">vektor_kecepatan_cpu</th>
                    <th scope="col" rowspan="2">vektor_kecepatan_gpu</th>
                    <th scope="col" rowspan="2">vektor_kapasitas_ram</th>
                    <th scope="col" colspan="2">penyimpanan</th>
                    <th scope="col" rowspan="2">vektor_harga</th>
                </tr>
                <tr>
                    <th scope="col">vektor_kapasitas_hdd</th>
                    <th scope="col">vektor_kapasitas_ssd</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vektor_cpu as $vc)
                <tr>
                    <th scope="row">{{ 'A'.$loop->iteration }}</th>
                    <td>{{ $vektor_cpu[$loop->index] }}</td>
                    <td>{{ $vektor_gpu[$loop->index] }}</td>
                    <td>{{ $vektor_ram[$loop->index] }}</td>
                    <td>{{ $vektor_ssd[$loop->index] }}</td>
                    <td>{{ $vektor_hdd[$loop->index] }}</td>
                    <td>{{ $vektor_harga[$loop->index] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <h3 class="mt-3">Perangkingan</h3>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <table class="table mt-1 text-center bg-white shadow">
            <thead class="table">
                <tr class="align-middle">
                    <th scope="col">rank</th>
                    <th scope="col">nama_alternatif</th>
                    <th scope="col">nilai_vektor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hasils as $h)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <th>{{ $h->nama_alternatif }}</th>
                    <td>{{ $h->hasil }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <h3 class="mt-3">Hasil</h3>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <table class="table mt-1 text-center bg-white shadow">
            <thead class="table">
                <tr class="align-middle">
                    <th scope="col" rowspan="2">rank</th>
                    <th scope="col" rowspan="2">nama_alternatif</th>
                    <th scope="col" rowspan="2">kecepatan_cpu</th>
                    <th scope="col" rowspan="2">kecepatan_gpu</th>
                    <th scope="col" rowspan="2">kapasitas_ram</th>
                    <th scope="col" colspan="2">penyimpanan</th>
                    <th scope="col" rowspan="2">harga</th>
                </tr>
                <tr>
                    <th scope="col">kapasitas_hdd</th>
                    <th scope="col">kapasitas_ssd</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hasils as $h)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <th>{{ $h->nama_alternatif }}</th>
                    <td>{{ $h->cpu->base_clock }}</td>
                    <td>{{ $h->gpu->base_clock }}</td>
                    <td>{{ $h->kapasitas_ram }}</td>
                    <td>{{ $h->kapasitas_ssd }}</td>
                    <td>{{ $h->kapasitas_hdd }}</td>
                    <td>{{ $h->harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection