<?php

namespace Database\Factories;

use App\Models\VolunteerMessage;
use Illuminate\Database\Eloquent\Factories\Factory;

class VolunteerMessageFactory extends Factory
{
    protected $model = VolunteerMessage::class;

    public function definition(): array
    {
        $first_name = ['Victoria', 'Sarah', 'Anne', 'Sabine', 'Geneviève'];
        $last_name = ['Fourny', 'Deseurs', 'Byers', 'Faso', 'Meex'];

        return [
            'first_name' => $this->faker->randomElement($first_name),
            'last_name' => $this->faker->randomElement($last_name),
            'email' => $this->faker->email(),
            'message' => 'Je suis attentioné, calin et doux avec les animaux',
            'read' => $this->faker->boolean()
        ];
    }
}
