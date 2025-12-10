<?php

use Livewire\Livewire;

it('verifies if the /admin/animals/create dislays correctly the admin.animals.create view', function () {

    Livewire::test(route('admin.animals.create'))
        ->assertStatus(200)
        ->assertSeeLivewire('pages::animals.create');

});
