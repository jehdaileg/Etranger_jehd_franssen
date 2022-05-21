<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Adresse extends Model
{
    use HasFactory;

    //relationships fixing

    public function universites(): HasMany
    {
        return $this->hasMany(Universite::class);
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class);
    }


}
