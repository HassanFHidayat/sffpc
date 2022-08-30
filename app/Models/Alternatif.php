<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function penjual() {
    //     return $this->belongsTo(Penjual::class);
    // }

    public function cpu() {
        return $this->belongsTo(CPU::class, 'kecepatan_cpu');
    }

    public function gpu() {
        return $this->belongsTo(GPU::class, 'kecepatan_gpu');
    }
}
