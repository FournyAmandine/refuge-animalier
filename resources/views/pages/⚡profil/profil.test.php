<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::profil')
        ->assertStatus(200);
});
