<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provenance extends Model
{
    use HasFactory;

    //relationships fixing

    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }
}
