<?php

use Livewire\Livewire;

it('verifies if the /admin/animals/index dislays correctly the admin.animals.index view', function () {
    Livewire::test('pages::animals.index')
        ->assertStatus(200)
        ->assertSeeLivewire('pages::animals.index');
});
