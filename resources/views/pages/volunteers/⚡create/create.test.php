<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::volunteers.create')
        ->assertStatus(200);
});
