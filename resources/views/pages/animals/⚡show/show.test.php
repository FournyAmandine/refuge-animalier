<?php

use Livewire\Livewire;

it('verifies if the /admin/animals/show dislays correctly the admin.animals.show view', function () {
    Livewire::test('pages::animals.show')
        ->assertStatus(200)
        ->assertSeeLivewire('pages::animals.show');
});
