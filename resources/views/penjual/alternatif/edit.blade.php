@extends('penjual.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit SFF-PC</h1>
    </div>
    <form action="/dashboard/alternatif/{{ $alternatifs->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <label for="nama" class="form-label">Nama</label>
            <div class="col-md-5">
                <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ $alternatifs->nama }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-5">
                <label for="kecepatan_cpu">CPU</label>
                <select class="form-select" name="kecepatan_cpu" id="kecepatan_cpu">
                    @foreach($cpus as $cpu)
                        @if(old('kecepatan_cpu', $alternatifs->kecepatan_cpu) == $cpu->id)
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
                        @if(old('kecepatan_gpu', $alternatifs->kecepatan_gpu) == $gpu->id)
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
                    <input type="number" name="harga" step=".01" class="form-control form-control-sm @error('harga') is-invalid @enderror" id="currency-field" data-type="currency" placeholder="1.000.000,00" value="{{ $alternatifs->harga }}">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-5">
                <label for="image" class="form-label @error('image') is-invalid @enderror">Upolad Gambar</label>
                <input type="hidden" name="oldImage" id="oldImage" value="{{ $alternatifs->image }}">
                <img src="{{ asset('storage/'.$alternatifs->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="link" class="form-label">Link</label>
            <div class="col-md-5">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control form-control-sm @error('link') is-invalid @enderror" name="link" id="link" value="{{ $alternatifs->link }}">
                </div>
            </div>
            <small id="elp" class="form-text text-muted">Link dapat langsung menuju ke produk atau ke toko. Jika toko tidak punya website dapat diinputkan link google maps.</small>
            @error('link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ url()->previous() }}" class="btn btn-primary mb-3">Kembali</a>
                <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            </div>
        </div>
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

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endpush