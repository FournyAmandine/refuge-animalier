<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Availability extends Model
{
    use HasFactory;

    protected $fillable = ['day', 'start', 'end', 'volunteer_id'];

    public function volunteer():BelongsTo
    {
        return $this->belongsTo(Volunteer::class);
    }
}
