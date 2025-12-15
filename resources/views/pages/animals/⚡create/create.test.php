<?php

use Livewire\Livewire;

it('renders successfully', function () {

    Livewire::test(route('admin.animals.create'))
        ->assertStatus(200)
        ->assertSeeLivewire('pages::animals.create');

});
