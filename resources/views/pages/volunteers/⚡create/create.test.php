<?php

use Livewire\Livewire;

it('verifies if the /admin/volunteers/create dislays correctly the admin.volunteers.create view', function () {

    Livewire::test(route('admin.volunteers.create'))
        ->assertStatus(200)
        ->assertSeeLivewire('pages::volunteers.create');

});
