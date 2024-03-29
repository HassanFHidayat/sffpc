<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPU extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function alternatif() {
        return $this->hasMany(Alternatif::class);
    }
}
