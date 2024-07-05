<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';

    /**
     * Get all of the atlet for the Profil
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atlet()
    {
        return $this->hasMany(Atlet::class);
    }
}
