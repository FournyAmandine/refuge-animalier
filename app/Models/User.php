<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profil_picture',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function animals(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'animal_user');
    }

    public function volunteers(): hasMany
    {
        return $this->hasMany(Volunteer::class);
    }

    public function contact_messages(): hasMany
    {
        return $this->hasMany(ContactMessage::class);
    }

    public function task(): hasMany
    {
        return $this->hasMany(Task::class);
    }

    public function volunteer_messages(): hasMany
    {
        return $this->hasMany(VolunteerMessage::class);
    }

    public function adoptions(): hasMany
    {
        return $this->hasMany(Adoption::class);
    }

}
