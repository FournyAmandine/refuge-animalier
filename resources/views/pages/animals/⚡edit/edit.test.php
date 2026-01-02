<?php

use Livewire\Livewire;

it('renders successfully', function () {

   Livewire::test(route('admin.animals.edit'))
        ->assertStatus(200)
        ->assertSeeLivewire('pages::animals.edit');

});
