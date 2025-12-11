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
        $first_name = ['Louis', 'Loïc', 'Anne', 'Victoria', 'Brigite', 'Laurent'];
        $availability = [];
        return [
            'last_name' => $this->faker->randomElement($last_name),
            'first_name' => $this->faker->randomElement($first_name),
            'birth_date' => $this->faker->date(),
            'email' => $this->faker->email(),
            'availability' => $availability,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
