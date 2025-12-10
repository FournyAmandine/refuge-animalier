<?php


it('verifies if the public.adoptionpage dislays correctly the adoptionpage view and the form', function () {

    $response = \Pest\Laravel\get(route('public.adoptionpage'));

    $response->assertStatus(200);
    $response->assertSee('<form', false);
});
