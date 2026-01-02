<?php


it('verifies if the public.contactpage dislays correctly the contactpage view and the form', function () {

    $response = \Pest\Laravel\get(route('public.contactpage', ['locale' => app()->getLocale()]));

    $response->assertStatus(200);
    $response->assertSee('<form', false);
});
