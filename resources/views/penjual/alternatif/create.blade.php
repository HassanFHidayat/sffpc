@extends('penjual.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Alternatif</h1>
    </div>
    <form action="/dashboard/alternatif" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-md-5">
                <label for="kecepatan_cpu">CPU</label>
                <select class="form-select" name="kecepatan_cpu" id="kecepatan_cpu">
                    @foreach($cpus as $cpu)
                        <option value="{{ $cpu->id }}" {{ old('kecepatan_cpu') == $cpu->id ? "selected" : "" }}>{{ $cpu->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-5">
                <label for="kecepatan_gpu">GPU</label>
                <select class="form-select" name="kecepatan_gpu" id="kecepatan_gpu">
                    @foreach($gpus as $gpu)
                        <option value="{{ $gpu->id }}" {{ old('kecepatan_gpu') == $gpu->id ? "selected" : "" }}>{{ $gpu->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <label for="kapasitas_ram" class="form-label">Kapasitas RAM</label>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" min="0" class="form-control form-control-sm @error('kapasitas_ram') is-invalid @enderror" name="kapasitas_ram" id="kapasitas_ram" placeholder="64" value="{{ old('kapasitas_ram') }}" required>
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
                    <input type="number" min="0" class="form-control form-control-sm" name="kapasitas_ssd" id="kapasitas_ssd" placeholder="1024" value="{{ old('kapasitas_ssd') }}">
                    <span class="input-group-text">GB</span>
                </div>
            </div>
        </div>
        <div class="row">
            <label for="kapasitas_hdd" class="form-label">Kapasitas HDD</label>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" min="0" class="form-control form-control-sm" name="kapasitas_hdd" id="kapasitas_hdd" placeholder="2048" value="{{ old('kapasitas_hdd') }}">
                    <span class="input-group-text">GB</span>
                </div>
            </div>
        </div>
        <div class="row">
            <label for="harga" class="form-label">Harga</label>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" name="harga" class="form-control form-control-sm @error('harga') is-invalid @enderror" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" placeholder="1.000.000,00" value="{{ old('harga') }}" required>
                    {{-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul> --}}
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="link" class="form-label">Link</label>
            <div class="col-md-5">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control form-control-sm @error('link') is-invalid @enderror" name="link" id="link" value="{{ old('link') }}" required>
                </div>
            </div>
            <small id="elp" class="form-text text-muted">Link dapat langsung menuju ke produk atau ke toko. Jika toko tidak punya website dapat diinputkan link google maps.</small>
            @error('link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
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

        // Jquery Dependency

// $("input[data-type='currency']").on({
//     keyup: function() {
//       formatCurrency($(this));
//     },
//     blur: function() { 
//       formatCurrency($(this), "blur");
//     }
// });


// function formatNumber(n) {
//   // format number 1000000 to 1,234,567
//   return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
// }


// function formatCurrency(input, blur) {
//   // appends $ to value, validates decimal side
//   // and puts cursor back in right position.
  
//   // get input value
//   var input_val = input.val();
  
//   // don't validate empty input
//   if (input_val === "") { return; }
  
//   // original length
//   var original_len = input_val.length;

//   // initial caret position 
//   var caret_pos = input.prop("selectionStart");
    
//   // check for decimal
//   if (input_val.indexOf(",") >= 0) {

//     // get position of first decimal
//     // this prevents multiple decimals from
//     // being entered
//     var decimal_pos = input_val.indexOf(",");

//     // split number by decimal point
//     var left_side = input_val.substring(0, decimal_pos);
//     var right_side = input_val.substring(decimal_pos);

//     // add commas to left side of number
//     left_side = formatNumber(left_side);

//     // validate right side
//     right_side = formatNumber(right_side);
    
//     // On blur make sure 2 numbers after decimal
//     if (blur === "blur") {
//       right_side += "00";
//     }
    
//     // Limit decimal to only 2 digits
//     right_side = right_side.substring(0, 2);

//     // join number by .
//     // input_val = "$" + left_side + "." + right_side;
//     input_val = left_side + "," + right_side;

//   } else {
//     // no decimal entered
//     // add commas to number
//     // remove all non-digits
//     input_val = formatNumber(input_val);
//     // input_val = "$" + input_val;
//     input_val = input_val;
    
//     // final formatting
//     if (blur === "blur") {
//       input_val += ",00";
//     }
//   }
  
//   // send updated string to input
//   input.val(input_val);

//   // put caret back in the right position
//   var updated_len = input_val.length;
//   caret_pos = updated_len - original_len + caret_pos;
//   input[0].setSelectionRange(caret_pos, caret_pos);
// }
    </script>
@endpush