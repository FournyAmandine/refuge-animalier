<?php

use App\Models\Animal;
use App\Models\User;
use App\Models\Volunteer;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

beforeEach(function(){
    $this->user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($this->user);
});


it('renders successfully', function () {

    $animals  = Animal::factory()->count(3)->create();

    $volunteers  = Volunteer::factory()->count(3)->create([
        'user_id' => $this->user->id
    ]);

    Livewire::test('pages::dashboard')
        ->assertStatus(200)
        ->assertSee($animals[0]->name)
        ->assertSee($animals[1]->name)
        ->assertSee($animals[2]->name)
        ->assertSee($volunteers[0]->name)
        ->assertSee($volunteers[1]->name)
        ->assertSee($volunteers[2]->name);
});


