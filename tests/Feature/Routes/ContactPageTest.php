<?php


it('verifies if the public.contactpage dislays correctly the contactpage and the form', function () {

    $response = \Pest\Laravel\get(route('public.contactpage'));

    $response->assertStatus(200);
    $response->assertSee('<form', false);
});
