<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Availability extends Model
{
    public $timestamps = false;

    protected $fillable = ['day', 'start', 'end', 'volunteer_id'];

    public function volunteer():BelongsTo
    {
        return $this->belongsTo(Volunteer::class);
    }
}
