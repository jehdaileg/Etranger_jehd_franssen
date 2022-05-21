<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ville;
use App\Models\Adresse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Universite extends Model
{
    use HasFactory;

    //relationships fixing

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function adresse(): BelongsTo
    {
        return $this->belongsTo(Adresse::class);
    }

    public function ville(): BelongsTo
    {
        return $this->belongsTo(Ville::class);
    }
}
