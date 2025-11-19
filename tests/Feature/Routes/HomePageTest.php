<?php

it('verifies if the public.homepage is dislays correctly the homepage', function (){

    $response = \Pest\Laravel\get(route('public.homepage'));

    $response->assertStatus(200);
    //$response->assertSee("<h2>Offrez-leur une seconde chance, ils vous rendront un amour infini !</h2>");

});
