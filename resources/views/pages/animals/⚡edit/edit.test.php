<?php

use App\Models\Animal;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;


it('renders successfully', function () {
    $user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($user);

    $animal = Animal::factory()->create();

    Livewire::test('pages::animals.edit', ['animal' => $animal->id])
        ->assertStatus(200);

});
