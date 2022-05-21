<?php

namespace App\Models;

use App\Models\User;
use App\Models\TypeDocument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    //relationships fixing

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function typedocument(): BelongsTo
    {
        return $this->belongsTo(TypeDocument::class);
    }
}
