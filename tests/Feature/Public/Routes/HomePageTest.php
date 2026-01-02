<?php

it('verifies if the public.homepage dislays correctly the homepage view', function (){

    $response = \Pest\Laravel\get(route('public.homepage'));

    $response->assertStatus(200);

});
