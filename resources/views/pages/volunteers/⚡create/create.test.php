<?php

use Livewire\Livewire;

it('renders successfully', function () {

    Livewire::test(route('admin.volunteers.create'))
        ->assertStatus(200)
        ->assertSeeLivewire('pages::volunteers.create');

});
