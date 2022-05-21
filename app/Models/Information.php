<?php

namespace App\Models;

use App\Models\TypeInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    use HasFactory;

    //relationships fixing

    public function typeinformation(): BelongsTo
    {
        return $this->belongsTo(TypeInformation::class);
    }
}
