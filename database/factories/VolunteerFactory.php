<?php

namespace Database\Factories;

use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VolunteerFactory extends Factory
{
    protected $model = Volunteer::class;

    public function definition(): array
    {
        $last_name = ['Bourguignon', 'Fourny', 'Mozin', 'Briol', 'Bayet'];
        $first_name = ['Louis', 'Loïc', 'Anne', 'Victoria', 'Brigitte', 'Laurent'];
        $availability = [];
        return [
            'last_name' => $this->faker->randomElement($last_name),
            'first_name' => $this->faker->randomElement($first_name),
            'birth_date' => $this->faker->date(),
            'email' => $this->faker->email(),
            'telephone' => '0472 40 78 43',
            'link_animal' => 'Elle est douce avec les animaux',
            'profil_path' => 'assets/img/icones/profil_volunteer.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
