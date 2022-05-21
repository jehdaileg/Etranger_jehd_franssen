<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ville;
use App\Models\Adresse;
use App\Models\Marchandise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marche extends Model
{
    use HasFactory;

    //relationships fixing

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function ville(): BelongsTo
    {
        return $this->belongsTo(Ville::class);
    }

    public function adresse(): BelongsTo
    {
        return $this->belongsTo(Adresse::class);
    }

    public function marchandises(): HasMany
    {
        return $this->hasMany(Marchandise::class);
    }
}
