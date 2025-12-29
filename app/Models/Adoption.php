<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Adoption extends Model
{
    use HasFactory;

    use Notifiable;

    protected $fillable = [
        'last_name',
        'first_name',
        'email',
        'civil_state',
        'street',
        'number',
        'postal_code',
        'animal_id',
        'locality',
        'description_place',
        'validate'
    ];

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }

    public function routeNotificationFor($driver, $notification = null)
    {
        return $this->email;
    }
}
