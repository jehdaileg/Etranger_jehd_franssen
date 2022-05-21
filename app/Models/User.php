<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Hotel;
use App\Models\Marche;
use App\Models\Document;
use App\Models\Provenance;
use App\Models\Universite;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relationships fixing

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function hotel() : BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function universite(): BelongsTo
    {
        return $this->belongsTo(Universite::class);
    }

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }

    public function marche(): BelongsTo
    {
        return $this->belongsTo(Marche::class);
    }

    public function provenance(): BelongsTo
    {
        return $this->belongsTo(Provenance::class);
    }

}
