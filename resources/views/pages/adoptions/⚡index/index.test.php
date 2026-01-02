<?php

use App\Models\Adoption;
use App\Models\Animal;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

beforeEach(function(){
    $this->user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($this->user);
});

it('renders successfully', function () {

    Livewire::test('pages::adoptions.index')
        ->assertStatus(200);
});


it('displays successfully the list of adoptions', function () {

    $animal  = Animal::factory()->create();
    $adoption = Adoption::factory()->create([
        'user_id' => $this->user,
        'animal_id' => $animal->id
    ]);

    Livewire::test('pages::adoptions.index')
        ->assertSee($adoption->first_name)
        ->assertSee($adoption->last_name)
        ->assertSee($animal->name);

});


it('opens the modal when the method is called', function () {
    $animal  = Animal::factory()->create();
    $adoption = Adoption::factory()->create([
        'user_id' => $this->user,
        'animal_id' => $animal->id
    ]);

    Livewire::test('pages::adoptions.index')
        ->assertSet('isOpenShowModal', false)
        ->call('toggleModal', 'show', $adoption->id)
        ->assertSet('isOpenShowModal', true)
        ->assertSee($animal->name);
});


