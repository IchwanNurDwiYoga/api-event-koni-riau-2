<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atlet extends Model
{
    use HasFactory;
    protected $table = 'atlet';

    /**
     * Get the profil that owns the Atlet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }

    /**
     * Get the cabor that owns the Atlet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cabor()
    {
        return $this->belongsTo(Cabor::class);
    }
}
