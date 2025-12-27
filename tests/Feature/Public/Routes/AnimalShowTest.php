<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('verifies if the public.animals.show route dislays correctly the animals.show view', function (){

$animal = \App\Models\Animal::factory()->create(
    ['state' => \App\Enums\AnimalStatus::Available]
)->toArray();

$response = \Pest\Laravel\get(route('public.animals.show', $animal['id']));

$response->assertStatus(200);
});
