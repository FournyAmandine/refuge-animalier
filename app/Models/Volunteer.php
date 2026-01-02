<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Volunteer extends Model
{
    use HasFactory;

    protected $casts = [
        'availability' => 'array',
    ];


    protected $fillable = ['last_name', 'first_name', 'birth_date', 'email', 'telephone', 'availability', 'profil_path', 'link_animal', 'password'];

    public function availabilities(): HasMany
    {
        return $this->hasMany(Availability::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
