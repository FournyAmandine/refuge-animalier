<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;
    public function definition(): array
    {
        $tasks = ['Valider la fiche de Charly', 'Répondre à Sarah', 'Valider la demande d’adoption de Casquette'];
        return [
            'task_name' => $this->faker->randomElement($tasks),
            'done' => $this->faker->boolean(),
        ];
    }
}
