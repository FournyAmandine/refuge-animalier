<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::tasks.index')
        ->assertStatus(200);
});
