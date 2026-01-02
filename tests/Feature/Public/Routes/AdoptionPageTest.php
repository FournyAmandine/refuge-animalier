<?php

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

        $this->post(route('public.adoptionpage.store',['locale' => app()->getLocale()]), [
            'animal_id'   => $animal->id,
            'first_name'  => 'Loic',
            'last_name'   => 'Mozin',
            'email'       => 'loic.mozin@gmail.com',
            'civil_state' => 'marié',
            'phone'       => '0458 96 78 96',
            'street'     => 'Rue du Spit',
            'number' => '52',
            'locality'        => 'Betagne',
            'postal_code' => '6687',
            'description_place' => 'Grand, jardin...',
            'user_id' =>1
        ])->assertRedirect();

        $this->assertDatabaseHas('adoptions', [
            'email' => 'loic.mozin@gmail.com',
            'animal_id' => $animal->id,
        ]);
    }
);
