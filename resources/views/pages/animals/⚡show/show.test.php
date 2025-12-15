<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::animals.show')
        ->assertStatus(200)
        ->assertSeeLivewire('pages::animals.show');
});
