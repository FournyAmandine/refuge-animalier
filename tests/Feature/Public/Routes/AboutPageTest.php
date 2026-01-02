<?php

it('verifies if the public.aboutpage dislays correctly the aboutpage view', function (){

    $response = \Pest\Laravel\get(route('public.aboutpage', ['locale' => app()->getLocale()]));

    $response->assertStatus(200);
});
