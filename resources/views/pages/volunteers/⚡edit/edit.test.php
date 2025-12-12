<?php

use Livewire\Livewire;

it('verifies if the /admin/volunteers/edit route dislays correctly the admin.volunteers.edit view', function () {

    Livewire::test(route('admin.volunteers.edit'))
        ->assertStatus(200)
        ->assertSeeLivewire('pages::volunteers.edit');

});

