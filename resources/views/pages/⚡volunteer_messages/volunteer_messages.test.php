<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::volunteer_messages')
        ->assertStatus(200);
});
