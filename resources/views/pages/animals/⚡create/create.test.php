<?php

use App\Models\Animal;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseEmpty;
use function Pest\Laravel\assertDatabaseHas;

beforeEach(function(){
    $user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($user);
});

it('renders successfully', function () {

    Livewire::test('pages::animals.create')
        ->assertStatus(200);

});

it('creates successfully a animal from the data provided by the request', function () {

    $user = User::factory()->create();
    actingAs($user);

    $animal = Animal::factory()->raw();

    Livewire::test('pages::animals.create')
        ->set('form.name', $animal['name'])
        ->set('form.sexe', $animal['sexe'])
        ->set('form.birth_date', $animal['birth_date'])
        ->set('form.type', $animal['type'])
        ->set('form.state', $animal['state'])
        ->set('form.coat', $animal['coat'])
        ->call('store')
        ->assertHasNoErrors();

    assertDatabaseHas('animals', ['name' => $animal['name']]);

});

it(
    'fails to create a new animal in database when the name is missing in the request',
    function () {

        $user = User::factory()->create();
        $animal = Animal::factory()
            ->withoutName()
            ->raw();

        actingAs($user);
        Livewire::test('pages::animals.create')
            ->set('form.name', $animal['name'])
            ->set('form.sexe', $animal['sexe'])
            ->set('form.birth_date', $animal['birth_date'])
            ->set('form.type', $animal['type'])
            ->set('form.state', $animal['state'])
            ->set('form.coat', $animal['coat'])
            ->call('store')
            ->assertHasErrors(['form.name' => 'required']);

        assertDatabaseEmpty('animals');

    }
);

it('fails to create a new animal in database when the type is missing in the request', function () {

    $user = User::factory()->create();
    actingAs($user);

    $animal = Animal::factory()->withoutType()->raw();

    Livewire::test('pages::animals.create')
        ->set('form.name', $animal['name'])
        ->set('form.sexe', $animal['sexe'])
        ->set('form.birth_date', $animal['birth_date'])
        ->set('form.type', $animal['type'])
        ->set('form.state', $animal['state'])
        ->set('form.coat', $animal['coat'])
        ->call('store')
        ->assertHasErrors(['form.type' => 'required']);

    assertDatabaseEmpty('animals');

});


it(
    'fails to create a new animal in database when the birth date has the wrong format in the request',
    function () {

        $user = User::factory()->create();
        $animal = Animal::factory()
            ->withWrongDate()
            ->raw();
        actingAs($user);
        Livewire::test('pages::animals.create')
            ->set('form.name', $animal['name'])
            ->set('form.sexe', $animal['sexe'])
            ->set('form.birth_date', $animal['birth_date'])
            ->set('form.type', $animal['type'])
            ->set('form.state', $animal['state'])
            ->set('form.coat', $animal['coat'])
            ->call('store')
            ->assertHasErrors(['form.birth_date' => 'date']);

            assertDatabaseEmpty('animals');

    }
);
