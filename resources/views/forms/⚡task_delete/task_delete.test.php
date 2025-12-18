<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('forms::task_delete')
        ->assertStatus(200);
});
