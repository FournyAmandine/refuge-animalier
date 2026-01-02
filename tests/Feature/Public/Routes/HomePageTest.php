<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);


it('verifies if the public.homepage dislays correctly the homepage view', function (){

    $response = \Pest\Laravel\get(route('public.homepage', ['locale' => app()->getLocale()]));

    $response->assertStatus(200);

});
