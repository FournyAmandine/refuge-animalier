<?php

use App\Models\Adoption;
use App\Models\Animal;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('verifies if the public.adoptionpage dislays correctly the adoptionpage view and the form', function () {

    $response = \Pest\Laravel\get(route('public.adoptionpage', ['locale' => app()->getLocale()]));

    $response->assertStatus(200);
    $response->assertSee('<form', false);
});


it('creates an adoption request from animal page', function () {

    $animal = Animal::factory()->create();

    $payload = Adoption::factory()->make([
        'animal_id' => $animal->id,
    ])->toArray();

    $this->post(
        route('public.adoptionpage.store', ['locale' => app()->getLocale()]),
        $payload
    )->assertRedirect();

    $this->assertDatabaseHas('adoptions', [
        'email' => $payload['email'],
        'animal_id' => $animal->id,
    ]);
}
);
