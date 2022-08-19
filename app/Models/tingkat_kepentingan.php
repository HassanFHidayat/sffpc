<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tingkat_kepentingan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pembelis() {
        return $this->belongsTo(pembeli::class);
    }
}
