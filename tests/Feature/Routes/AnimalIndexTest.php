<?php


use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('verifies if the public.animal.index route dislays correctly the animal.index view', function (){

    $response = \Pest\Laravel\get(route('public.animals.index'));

    $response->assertStatus(200);
});
