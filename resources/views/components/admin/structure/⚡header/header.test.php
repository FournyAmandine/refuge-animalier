<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('admin.structure.header')
        ->assertStatus(200);
});
