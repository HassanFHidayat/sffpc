@extends('../layouts.main')
@section('container')
    <h1 class="text-center">Edit Tingkat Kepentingan</h1>
    <form method="post" action="/rekomendasi/{{ $tks->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="cpu_lokal" class="form-label">CPU</label>
            <select class="form-select" name="cpu_lokal">
                @foreach ($skalas as $skala)
                    @if(old('cpu_lokal', $tks->cpu_lokal) == $skala->value)
                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                    @else
                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="gpu_lokal" class="form-label">GPU</label>
            <select class="form-select" name="gpu_lokal">
                @foreach ($skalas as $skala)
                    @if(old('gpu_lokal', $tks->gpu_lokal) == $skala->value)
                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                    @else
                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="ram_lokal" class="form-label">RAM</label>
            <select class="form-select" name="ram_lokal">
                @foreach ($skalas as $skala)
                    @if(old('ram_lokal', $tks->ram_lokal) == $skala->value)
                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                    @else
                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="storage_lokal" class="form-label">Storage</label>
            <select class="form-select" name="storage_lokal">
                @foreach ($skalas as $skala)
                    @if(old('storage_lokal', $tks->storage_lokal) == $skala->value)
                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                    @else
                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="ssd_lokal" class="form-label">SSD</label>
            <select class="form-select" name="ssd_lokal">
                @foreach ($skalas as $skala)
                    @if(old('ssd_lokal', $tks->ssd_lokal) == $skala->value)
                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                    @else
                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="hdd_lokal" class="form-label">HDD</label>
            <select class="form-select" name="hdd_lokal">
                @foreach ($skalas as $skala)
                    @if(old('hdd_lokal', $tks->hdd_lokal) == $skala->value)
                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                    @else
                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="harga_lokal" class="form-label">Harga</label>
            <select class="form-select" name="harga_lokal">
                @foreach ($skalas as $skala)
                    @if(old('harga_lokal', $tks->harga_lokal) == $skala->value)
                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                    @else
                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
@endsection