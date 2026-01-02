<?php


it('verifies if the public.volunteerpage dislays correctly the volunteerpage view and the form', function () {

    $response = \Pest\Laravel\get(route('public.volunteerpage'));

    $response->assertStatus(200);
    $response->assertSee('<form', false);
});
