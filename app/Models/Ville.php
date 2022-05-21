<?php

namespace App\Models;

use App\Models\Universite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;


    public function universites(): HasMany
    {
        return $this->hasMany(Universite::class);
    }
}
