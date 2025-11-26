<?php


use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('verifies if the public.animals.index route dislays correctly the animals.index view', function (){

    $response = \Pest\Laravel\get(route('public.animals.index'));

    $response->assertStatus(200);
});
