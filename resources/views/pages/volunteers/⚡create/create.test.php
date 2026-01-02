<?php

use App\Models\Animal;
use App\Models\User;
use App\Models\Volunteer;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseEmpty;
use function Pest\Laravel\assertDatabaseHas;

beforeEach(function(){
    $user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($user);
});

it('renders successfully', function () {

    Livewire::test('pages::volunteers.create')
        ->assertStatus(200);

});

it('creates successfully a volunteer from the data provided by the request', function () {

    $volunteer = Volunteer::factory()->raw();

    Livewire::test('pages::volunteers.create')
        ->set('form.last_name', $volunteer['last_name'])
        ->set('form.first_name', $volunteer['first_name'])
        ->set('form.birth_date', $volunteer['birth_date'])
        ->set('form.email', $volunteer['email'])
        ->set('form.telephone', $volunteer['telephone'])
        ->set('form.profil_path', $volunteer['profil_path'])
        ->set('form.link_animal', $volunteer['link_animal'])
        ->set('form.password', $volunteer['password'])
        ->call('store')
        ->assertHasNoErrors();

    assertDatabaseHas('volunteers', ['first_name' => $volunteer['first_name']]);

});

it(
    'fails to create a new volunteer in database when the name is missing in the request',
    function () {

        $volunteer = Volunteer::factory()
            ->withoutFirstName()
            ->withoutLastName()
            ->raw();

        Livewire::test('pages::volunteers.create')
            ->set('form.last_name', $volunteer['last_name'])
            ->set('form.first_name', $volunteer['first_name'])
            ->set('form.birth_date', $volunteer['birth_date'])
            ->set('form.email', $volunteer['email'])
            ->set('form.telephone', $volunteer['telephone'])
            ->set('form.profil_path', $volunteer['profil_path'])
            ->set('form.link_animal', $volunteer['link_animal'])
            ->set('form.password', $volunteer['password'])
            ->call('store')
            ->assertHasErrors(['form.first_name' => 'required', 'form.last_name'=>'required']);

        assertDatabaseEmpty('volunteers');

    }
);

it('fails to create a new volunteer in database when the birth date has the wrong format in the request', function () {

    $volunteer = Volunteer::factory()
        ->withWrongDate()
        ->raw();

    Livewire::test('pages::animals.create')
        ->set('form.last_name', $volunteer['last_name'])
        ->set('form.first_name', $volunteer['first_name'])
        ->set('form.birth_date', $volunteer['birth_date'])
        ->set('form.email', $volunteer['email'])
        ->set('form.telephone', $volunteer['telephone'])
        ->set('form.profil_path', $volunteer['profil_path'])
        ->set('form.link_animal', $volunteer['link_animal'])
        ->set('form.password', $volunteer['password'])
        ->call('store')
        ->assertHasErrors(['form.birth_date' => 'date']);

    assertDatabaseEmpty('volunteers');


});

