<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::volunteers.show')
        ->assertStatus(200);
});
