<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'sexe', 'race', 'type', 'coat', 'vaccines', 'birth_date', 'state', 'img_path', 'description'];
}
