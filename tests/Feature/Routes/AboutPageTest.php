<?php

it('verifies if the public.aboutpage dislays correctly the homepage', function (){

    $response = \Pest\Laravel\get(route('public.aboutpage'));

    $response->assertStatus(200);
});
