<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $table = 'prestasi';

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function cabor()
    {
        return $this->belongsTo(Cabor::class);
    }

    public function nomor_pertandingan()
    {
        return $this->belongsTo(NomorPertandingan::class);
    }

    public function fase()
    {
        return $this->belongsTo(Fase::class);
    }
}
