@extends('penjual.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Alternatif</h1>
    </div>
    <form action="/dashboard/alternatif/{{ $alternatifs->id }}" method="post">
        @method('put')
        @csrf
        <div class="row mb-3">
            <div class="col-md-5">
                <label for="kecepatan_cpu">CPU</label>
                <select class="form-select" name="kecepatan_cpu" id="kecepatan_cpu">
                    @foreach($cpus as $cpu)
                        @if(old('kecepatan_cpu', $alternatifs->kecepatan_cpu) == $cpu->kecepatan_cpu)
                            <option value="{{ $cpu->id }}" selected>{{ $cpu->nama }}</option>
                        @else
                            <option value="{{ $cpu->id }}">{{ $cpu->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-5">
                <label for="kecepatan_gpu">GPU</label>
                <select class="form-select" name="kecepatan_gpu" id="kecepatan_gpu">
                    @foreach($gpus as $gpu)
                        @if(old('kecepatan_gpu', $alternatifs->kecepatan_gpu) == $gpu->kecepatan_gpu)
                            <option value="{{ $gpu->id }}" selected>{{ $gpu->nama }}</option>
                        @else
                            <option value="{{ $gpu->id }}">{{ $gpu->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <label for="kapasitas_ram" class="form-label">Kapasitas RAM</label>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" min="0" class="form-control form-control-sm @error('kapasitas_ram') is-invalid @enderror" name="kapasitas_ram" id="kapasitas_ram" placeholder="64" value="{{ $alternatifs->kapasitas_ram }}">
                    <span class="input-group-text">GB</span>
                    @error('kapasitas_ram')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <label for="kapasitas_ssd" class="form-label">Kapasitas SSD</label>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" min="0" class="form-control form-control-sm" name="kapasitas_ssd" id="kapasitas_ssd" placeholder="1024" value="{{ $alternatifs->kapasitas_ssd }}">
                    <span class="input-group-text">GB</span>
                </div>
            </div>
        </div>
        <div class="row">
            <label for="kapasitas_hdd" class="form-label">Kapasitas HDD</label>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" min="0" class="form-control form-control-sm" name="kapasitas_hdd" id="kapasitas_hdd" placeholder="2048" value="{{ $alternatifs->kapasitas_hdd }}">
                    <span class="input-group-text">GB</span>
                </div>
            </div>
        </div>
        <div class="row">
            <label for="harga" class="form-label">Harga</label>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" name="harga" class="form-control form-control-sm @error('harga') is-invalid @enderror" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" placeholder="1.000.000,00" value="{{ $alternatifs->harga }}">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
    </form>
@endsection
@push('page-script')
    <script>
        $(document).ready(function() {
            $('#kecepatan_cpu').select2();
        });
        
        $(document).ready(function() {
            $('#kecepatan_gpu').select2();
        });
    </script>
@endpush