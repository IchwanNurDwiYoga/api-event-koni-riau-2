<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaEvent extends Model
{
    use HasFactory;
    protected $table = 'peserta_event';

    public function atlet()
    {
        return $this->belongsTo(Atlet::class);
    }
}
