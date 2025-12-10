<?php

use Livewire\Livewire;

it('verifies if the /admin/animals/edit dislays correctly the admin.animals.edit view', function () {

   Livewire::test(route('admin.animals.edit'))
        ->assertStatus(200)
        ->assertSeeLivewire('pages::animals.edit');

});
