<?php


it('verifies if the /admin/volunteers/create dislays correctly the admin.volunteers.create view', function () {

    $this->get(route('admin.volunteers.create'))
        ->assertSeeLivewire('pages::volunteers.create');

});


