<?php

use App\Enums\AnimalStatus;
use App\Models\Animal;
use Illuminate\Foundation\Testing\RefreshDatabase;


uses(RefreshDatabase::class);

it('Verify that the user can access the animal’s details page correctly and that the information is accurate', function (){
    $animal = Animal::factory()->create(
        ['state' => AnimalStatus::Available]
    )->toArray();

    $second_animal =Animal::factory()->create(
        ['state' => AnimalStatus::Available]
    )->toArray();

    $response = $this->get(route('public.animals.show', $animal['id']));

    $response->assertStatus(200);

    $response->assertSee($animal['name']);

    $response->assertSee($second_animal['name']);

});
