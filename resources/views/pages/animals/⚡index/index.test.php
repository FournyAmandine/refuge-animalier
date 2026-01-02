<?php

use App\Models\Animal;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

beforeEach(function(){
    $user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($user);
});

it('renders successfully', function () {
    Livewire::test('pages::animals.index')
        ->assertStatus(200)
        ->assertSeeLivewire('pages::animals.index');
});

it('displays successfully the list of animals', function () {

    $user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($user);

    $animals  = Animal::factory()->count(3)->create();


    Livewire::test('pages::animals.index')
        ->assertSee($animals[0]->name)
        ->assertSee($animals[1]->name)
        ->assertSee($animals[2]->name);

});

it('opens the modal when the method is called', function () {
    $animal  = Animal::factory()->create();

    Livewire::test('pages::animals.index')
        ->assertSet('isOpenDeleteModal', false)
        ->call('toggleModal', 'delete', $animal->id)
        ->assertSet('isOpenDeleteModal', true)
        ->assertSee($animal->name);
});

it('deletes an animal and closes the modal', function () {
    $animal = Animal::factory()->create();

    Livewire::test('pages::animals.index')
        ->call('toggleModal', 'delete', $animal->id)
        ->call('delete');

    $this->assertDatabaseMissing('animals', ['id' => $animal->id]);
});
