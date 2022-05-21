<?php

namespace App\Models;

use App\Models\Marche;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marchandise extends Model
{
    use HasFactory;

    //relationships fixing

    public function marche(): BelongsTo
    {
        return $this->belongsTo(Marche::class);
    }
}
