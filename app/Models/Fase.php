<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    use HasFactory;
    protected $table = 'fase_pertandingan';

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }
}
