<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Volunteer extends Model
{
    use HasFactory;

    protected $casts = [
        'availability' => 'array',
    ];


    protected $fillable = ['last_name', 'first_name', 'birth_date', 'email', 'telephone', 'availability', 'profil_path', 'link_animal'];

    public function availabilities(): HasMany
    {
        return $this->hasMany(Availability::class);
    }
}
