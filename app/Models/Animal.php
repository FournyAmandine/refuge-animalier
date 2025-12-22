<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'sexe', 'race', 'type', 'coat', 'vaccines', 'birth_date', 'state', 'img_path', 'description'];

    public function animals():HasMany
    {
        return $this->hasMany(Adoption::class);
    }
}
