<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'sexe', 'race', 'type', 'coat', 'vaccines', 'birth_date', 'state', 'img_path', 'description'];

    public function adoptions():HasMany
    {
        return $this->hasMany(Adoption::class);
    }
    public function notes():HasMany
    {
        return $this->hasMany(Notes::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'animal_user');
    }
}
