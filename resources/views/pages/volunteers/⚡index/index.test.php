<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::volunteers.index')
        ->assertStatus(200);
});
