<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::adoptions.index')
        ->assertStatus(200);
});
