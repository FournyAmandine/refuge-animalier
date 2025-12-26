<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notes extends Model
{
    use HasFactory;

    protected $fillable = [
        'note_name',
        'visit_date',
        'content',
        'name',
        'animal_id'
    ];

    public function animal():BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }
}
