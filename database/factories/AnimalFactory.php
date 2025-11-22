<?php

namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    public function definition(): array
    {

        $name = ['Charly', 'Frimousse', 'Happy', 'Panpan', 'Moka', 'Simba', 'Bouboule', 'Bunny', 'Folette'];
        $sexe = ['Mâle', 'Femelle'];
        $race = ['Chat', 'Lapin', 'Border Collie', 'American Staff', 'Caniche', 'Golden Retriever'];

        return [
            'name' => $this->faker->randomElement($name),
            'sexe' => $this->faker->randomElement($sexe),
            'birth_date' => $this->faker->date(),
            'age' => $this->faker->numberBetween(1, 8),
            'race' => $this->faker->randomElement($race),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
