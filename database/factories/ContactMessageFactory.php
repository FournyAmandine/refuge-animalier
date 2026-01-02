<?php

namespace Database\Factories;

use App\Models\ContactMessage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactMessageFactory extends Factory
{
    protected $model = ContactMessage::class;

    public function definition(): array
    {
        $first_name = ['Victoria', 'Sarah', 'Anne', 'Sabine', 'Geneviève'];
        $last_name = ['Fourny', 'Deseurs', 'Byers', 'Faso', 'Meex'];

        return [
            'first_name' => $this->faker->randomElement($first_name),
            'last_name' => $this->faker->randomElement($last_name),
            'email' => $this->faker->email(),
            'message' => 'Bonjour, je voudrais voir Moka mais je n’ai pas de nouvelles, pouvez-vous me contacter après 17h?',
            'read' => $this->faker->boolean(),
        ];
    }
}
