<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::contact_messages.index')
        ->assertStatus(200);
});
