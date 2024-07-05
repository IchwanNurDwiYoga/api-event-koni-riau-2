<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabor extends Model
{
    use HasFactory;
    protected $table = 'cabor';

    /**
     * Get all of the atlet for the Cabor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atlet()
    {
        return $this->hasMany(Atlet::class);
    }
}
