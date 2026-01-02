<?php

namespace Database\Factories;

use App\Enums\AnimalStatus;
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
        $type = ['Chat', 'Lapin', 'Chien'];
        $race = ['Border Collie', 'American Staff', 'Caniche', 'Golden Retriever'];
        $coat = ['Brun', 'Noir', 'Poils longs bruns et blancs', 'Poils longs noirs et blancs', 'Poils courts blancs'];
        $state = [AnimalStatus::Adopted, AnimalStatus::Available, AnimalStatus::Care, AnimalStatus::Draft, AnimalStatus::Pending];
        $img_path = ['assets/img/bunny.png', 'assets/img/bouboule.png', 'assets/img/charly.png', 'assets/img/folette.png', 'assets/img/happy.png', 'assets/img/simba.png', 'assets/img/moka.png', 'assets/img/panpan.png'];

        return [
            'name' => $this->faker->randomElement(['Charly', 'Frimousse', 'Happy', 'Panpan', 'Moka', 'Simba', 'Bouboule', 'Bunny', 'Folette']),
            'sexe' => $this->faker->randomElement(['Mâle', 'Femelle']),
            'birth_date' => $this->faker->date(),
            'vaccines' => 'Tétanos, rage',
            'coat' => $this->faker->randomElement(['Brun', 'Noir', 'Poils longs bruns et blancs', 'Poils longs noirs et blancs', 'Poils courts blancs']),
            'type' => $this->faker->randomElement(['Chat', 'Lapin', 'Chien']),
            'race' => $this->faker->randomElement(['Border Collie', 'American Staff', 'Caniche', 'Golden Retriever']),
            'state' => $this->faker->randomElement(AnimalStatus::cases()),
            'img_path' => $this->faker->randomElement(['assets/img/bunny.png', 'assets/img/bouboule.png', 'assets/img/charly.png', 'assets/img/folette.png', 'assets/img/happy.png', 'assets/img/simba.png', 'assets/img/moka.png', 'assets/img/panpan.png']),
            'description' => 'Petit chien fou et amitieux',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

    public function withoutName(): AnimalFactory
    {
        return $this->state(function (array $attributes) {

            return [

                'name' => null,

            ];

        });
    }

    public function withoutType(): AnimalFactory
    {
        return $this->state(function (array $attributes) {

            return [

                'type' => null,

            ];

        });
    }

    public function withWrongDate(): AnimalFactory
    {
        return $this->state(function (array $attributes) {

            return [

                'birth_date' => 'bonjour',

            ];

        });
    }
}
