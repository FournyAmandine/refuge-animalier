<?php

namespace Database\Factories;

use App\Enum\AnimalStatus;
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
        $state = [AnimalStatus::Adopted, AnimalStatus::Available, AnimalStatus::Care, AnimalStatus::Draft, AnimalStatus::Pending];
        $img_path = ['assets/img/bunny.png', 'assets/img/bouboule.png', 'assets/img/charly.png', 'assets/img/folette.png', 'assets/img/happy.png', 'assets/img/simba.png', 'assets/img/moka.png', 'assets/img/panpan.png'];

        return [
            'name' => $this->faker->randomElement($name),
            'sexe' => $this->faker->randomElement($sexe),
            'birth_date' => $this->faker->date(),
            'age' => $this->faker->numberBetween(1, 8),
            'race' => $this->faker->randomElement($race),
            'state' => $this->faker->randomElement($state),
            'img_path' => $this->faker->randomElement($img_path),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
