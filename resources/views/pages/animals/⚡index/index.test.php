<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::animals.index')
        ->assertStatus(200)
        ->assertSeeLivewire('pages::animals.index');
});
