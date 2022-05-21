<?php

namespace App\Models;

use App\Models\User;
use App\Models\Adresse;
use App\Models\Chambre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
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

    public function chambres(): HasMany
    {
        return $this->hasMany(Chambre::class);
    }
}
