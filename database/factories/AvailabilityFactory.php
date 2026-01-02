<?php

namespace Database\Factories;

use App\Models\Availability;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AvailabilityFactory extends Factory
{
    protected $model = Availability::class;
    public function definition(): array
    {

        $day = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        $start = ['9:30', '10:30', '11:30'];
        $end = ['15:30', '16:30', '17:30'];

        return [
            'day' => $this->faker->randomElement($day),
            'start' => $this->faker->randomElement($start),
            'end' => $this->faker->randomElement($end),
            'volunteer_id' => random_int(1, 10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
