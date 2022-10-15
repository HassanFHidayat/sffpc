@extends('../layouts.main')
@section('container')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="text-center">Tambah Bobot Kriteria</h3>
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form method="post" action="/rekomendasi">
                    @csrf
                    <div class="mb-3">
                        <label for="cpu_lokal" class="form-label">CPU</label>
                        <select class="form-select" name="cpu_lokal">
                            @foreach ($skalas as $skala)
                                @if(old('cpu_lokal') == $skala->value)
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
                                @if(old('gpu_lokal') == $skala->value)
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
                                @if(old('ram_lokal') == $skala->value)
                                    <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                                @else
                                    <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-1">
                        <div class="col d-block justify-content-center align-content-center">
                            <label for="storage_lokal" class="form-label">Storage</label>
                            <select class="form-select" name="storage_lokal">
                                @foreach ($skalas as $skala)
                                    @if(old('storage_lokal') == $skala->value)
                                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                                    @else
                                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="ssd_lokal" class="form-label">SSD</label>
                            <select class="form-select" name="ssd_lokal">
                                @foreach ($skalas as $skala)
                                    @if(old('ssd_lokal') == $skala->value)
                                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                                    @else
                                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="hdd_lokal" class="form-label">HDD</label>
                            <select class="form-select" name="hdd_lokal">
                                @foreach ($skalas as $skala)
                                    @if(old('hdd_lokal') == $skala->value)
                                        <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                                    @else
                                        <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="harga_lokal" class="form-label">Harga</label>
                        <select class="form-select" name="harga_lokal">
                            @foreach ($skalas as $skala)
                                @if(old('harga_lokal') == $skala->value)
                                    <option value="{{ $skala->value }}" selected>{{ $skala->value }} - {{ $skala->description }}</option>
                                @else
                                    <option value="{{ $skala->value }}">{{ $skala->value }} - {{ $skala->description }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            {{-- <a href="{{ url()->previous() }}" class="btn btn-primary mb-3">Kembali</a> --}}
                            <button type="submit" class="btn btn-primary mb-3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow">
            <div class="card-body">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                CPU
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <p><strong>CPU atau Processor</strong> yang sering disebut juga dengan otak komputer, menjadi salah satu perangkat yang terpenting dalam komputer. CPU adalah tempat pemrosesan perintah-perintah yang ada pada komputer.</p>
                                <p>Tolok ukur dari parameter ini adalah semakin rendah kecepatan processor maka semakin rendah menjadi pilihan, sebaliknya semakin tinggi kecepatan processor maka semakin tinggi menjadi pilihan.</p>
                                <p>
                                    <a href="https://ilkom.unublitar.ac.id/id/2018/06/10218-2/" class="text-decoration-none" target="_blank">Sumber 1</a><br>
                                    <a href="https://www.domainesia.com/berita/komponen-komputer/" class="text-decoration-none" target="_blank">Sumber 2</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                GPU
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <p><strong>GPU (Graphics Processing Unit)</strong> adalah prosesor yang tersusun dari banyak core yang berukuran kecil dan spesifik. Core-core ini bekerja untuk memastikan komputer dapat mengolah data, khususnya gambar dengan baik. Mengutip Intel, GPU merupakan komponen yang memungkinkan kita mengerjakan banyak hal, mulai dari membuat konten, machine learning, gaming, dan tentunya masih banyak lagi. Bahkan, mining cryptocurrency yang makin populer juga sangat membutuhkan GPU, lho. Semakin canggih, prosesnya juga semakin cepat.</p>
                                <p>Tolok ukur dari parameter ini adalah semakin rendah kecepatan VGA maka semakin rendah menjadi pilihan, sebaliknya semakin tinggi kecepatan VGA maka semakin tinggi menjadi pilihan.</p>
                                <p>
                                    <a href="https://glints.com/id/lowongan/gpu-adalah/" class="text-decoration-none" target="_blank">Sumber</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                RAM
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                                <p>
                                    <strong>Random Access Memory atau RAM</strong> merupakan sebuah perangkat yang cukup kecil tetapi sangat besar kegunaannya. Salah satu fungsinya adalah sebagai penyimpanan data sementara. Selain itu RAM juga menyediakan data-data penting yang dibutuhkan processordengan cepat untuk diolah menjadi sebuah informasi.
                                </p>
                                <p>Tolok ukur dari parameter ini adalah semakin rendah kapasitas RAM maka semakin rendah menjadi pilihan, sebaliknya semakin tinggi kapasitas RAM maka semakin tinggi menjadi pilihan.</p>
                                <p>
                                    <a href="https://ilkom.unublitar.ac.id/id/2018/06/10218-2/" class="text-decoration-none" target="_blank">Sumber</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Storage
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <p><strong>Storage (Tempat Penyimpanan)</strong> Komponen ini berfungsi sebagai perangkat keras untuk menyimpan sebuah data sekunder. Perangkat yang termasuk dalam komponen ini diantaranya adalah Harddisk (HDD) dan Solid State Drive (SSD).</p>
                                <p>Pada sistem ini storage mempunyai dua sub kriteria yaitu solid state drive dan harddisk.</p>
                                <p>
                                    <a href="https://ilkom.unublitar.ac.id/id/2018/06/10218-2/" class="text-decoration-none" target="_blank">Sumber</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                SSD
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                            <div class="accordion-body">
                                <p><strong>SSD (Solid State Drive)</strong> adalah singkatan dari Solid State Drive. Prinsipnya SSD itu sama seperti HDD yaitu untuk menyimpan data. Hanya saja data tidak disimpan pada lapisan-lapisan magnetik layaknya HDD. SSD menyimpan semua data pada chip-chip emory flash yang saling terhubung satu sama lain. Flash memory pada SSD jelas berbeda dengan yang digunakan pada Flashdisk dalam hal type dan kecepatan. Chip flash memori pada SSD memiliki kecepatan yang lebih tinggi daripada Flashdisk.</p>
                                <p>Tolok ukur dari parameter ini adalah semakin rendah kapasitas solid state drive maka semakin rendah menjadi pilihan, sebaliknya semakin tinggi kapasitas solid state drive maka semakin tinggi menjadi pilihan.</p>
                                <p>
                                    <a href="https://www.it-jurnal.com/pengertian-ssd/" class="text-decoration-none" target="_blank">Sumber</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                HDD
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                            <div class="accordion-body">
                                <p><strong>Hard Disk Drive (HDD)</strong> adalah perangkat keras atau hardware yang berguna sebagai media penyimpanan data komputer. Perangkat ini akan menampung beragam data baik itu dokumen, gambar, video, data sistem, aplikasi dan OS.</p>
                                <p>Tolok ukur dari parameter ini adalah semakin rendah kapasitas harddisk maka semakin rendah menjadi pilihan, sebaliknya semakin tinggi kapasitas harddisk maka semakin tinggi menjadi pilihan.</p>
                                <p>
                                    <a href="https://dianisa.com/pengertian-hard-disk-drive/" class="text-decoration-none" target="_blank">Sumber</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                HARGA
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                            <div class="accordion-body">
                                <p><strong>Harga</strong> merupakan nilai atau uang yang diberikan pelanggan sebagai imbalan atas penawaran tertentu yang berfungsi untuk memuaskan kebutuhan dan Keinginan mereka. Secara sederhana harga merupakan ukuran nilai yang ditukarkan pelanggan membeli suatu penawaran.</p>
                                <p>Tolok ukur dari parameter ini adalah semakin rendah harganya maka semakin tinggi menjadi pilihan, sebaliknya semakin tinggi harga maka semakin rendah menjadi pilihan.</p>
                                <p>
                                    <a href="https://www.gramedia.com/literasi/pengertian-harga/" class="text-decoration-none" target="_blank">Sumber</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection