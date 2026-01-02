<?php

it('verifies if a page is display in french and english', function (string $locale, string $main_heading) {
    App::setLocale($locale);

    $response = $this->get(route('public.aboutpage'));

    $response->assertStatus(200);

    $response->assertSee($main_heading);

})->with([
        ['fr', 'Découvrez notre refuge'],
        ['en', 'Discover our shelter'],
]);



