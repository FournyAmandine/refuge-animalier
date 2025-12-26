<?php

namespace Database\Factories;

use App\Models\Notes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class NotesFactory extends Factory
{
    protected $model = Notes::class;

    public function definition(): array
    {
        return [
            'visit_date' => $this->faker->date(),
            'content' => $this->faker->text,
            'note_name' => $this->faker->name(),
            'animal_id' => $this->faker->numberBetween(1, 10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
