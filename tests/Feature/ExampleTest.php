<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('the application returns a successful response', function () {
    $response = $this->get('/login');

    $locale = App::getLocale();
    $response = $this->get("/{$locale}/");

    $response->assertStatus(200);
});
