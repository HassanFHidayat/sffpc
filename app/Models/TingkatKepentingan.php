<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatKepentingan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pembeli() {
        return $this->belongsTo(Pembeli::class);
    }
}