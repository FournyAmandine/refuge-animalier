<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::messages.index')
        ->assertStatus(200);
});
