<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::dashboard')
        ->assertStatus(200);
});
