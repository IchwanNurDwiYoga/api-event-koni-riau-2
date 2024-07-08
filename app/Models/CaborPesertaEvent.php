<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaborPesertaEvent extends Model
{
    use HasFactory;
    protected $table = 'cabor_peserta_event';

    public function Cabor()
    {
        return $this->belongsTo(Cabor::class);
    }
}
