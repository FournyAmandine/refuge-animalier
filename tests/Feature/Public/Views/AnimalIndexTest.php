<?php

use App\Enums\AnimalStatus;
use App\Models\Animal;
use Illuminate\Foundation\Testing\RefreshDatabase;


uses(RefreshDatabase::class);

it('Check if the animals we see have the correct ’available’ status', function (){
    Animal::factory()->count(3)->create([
        'state' => AnimalStatus::Available->value,
    ]);

    foreach (AnimalStatus::cases() as $animalStatus){
        if ($animalStatus !== AnimalStatus::Available){
            Animal::factory()->create(['state' => $animalStatus->value]);
        }
    }

    $response = $this->get(route('public.animals.index', ['locale' => app()->getLocale()]));

    $response->assertStatus(200);

    \Pest\Laravel\assertDatabaseHas('animals', ['state' => AnimalStatus::Available->value]);

    foreach (AnimalStatus::cases() as $animalStates) {
        if ($animalStates !== AnimalStatus::Available) {
            $response->assertDontSee($animalStates->value);
        }
    }
});
