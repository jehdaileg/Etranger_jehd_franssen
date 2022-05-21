<?php

namespace App\Models;

use App\Models\Information;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeInformation extends Model
{
    use HasFactory;

    //relationships fixing

    public function informations(): HasMany
    {
        return $this->hasMany(Information::class);
    }
}
