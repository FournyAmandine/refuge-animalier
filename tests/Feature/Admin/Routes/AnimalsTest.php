<?php


it('verifies if the /admin/animals/create dislays correctly the admin.animals.create view', function () {

    $this->get(route('admin.animals.create'))
        ->assertSeeLivewire('pages::animals.create');

});

it('verifies if the /admin/animals/edit dislays correctly the admin.animals.edit view', function () {

    $this->get(route('admin.animals.edit'))
        ->assertSeeLivewire('pages::animals.edit');

});


