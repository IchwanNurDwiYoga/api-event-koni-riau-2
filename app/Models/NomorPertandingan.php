<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorPertandingan extends Model
{
    use HasFactory;
    protected $table = 'nomor_pertandingan';

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }
}
