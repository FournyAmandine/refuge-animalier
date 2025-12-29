<?php

namespace Database\Factories;

use App\Models\Adoption;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AdoptionFactory extends Factory
{
    protected $model = Adoption::class;

    public function definition(): array
    {
        $civile_state = ['Mariée', 'Seule', 'Mère de famille', 'Habite avec son conjoint'];

        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'civil_state' => $this->faker->randomElement($civile_state),
            'street' => $this->faker->streetName(),
            'number' => $this->faker->randomNumber(),
            'postal_code' => $this->faker->postcode(),
            'animal_id' => $this->faker->numberBetween(1, 10),
            'locality' => $this->faker->word(),
            'description_place' => $this->faker->text(),
            'validate' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
