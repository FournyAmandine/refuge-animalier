<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::animals.edit')
        ->assertStatus(200);
});
