<?php

use App\Models\User;
use App\Models\Volunteer;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

it('renders successfully', function () {
    $user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($user);

    $volunteer = Volunteer::factory()->create([
        'user_id' => $user->id
    ]);

    Livewire::test('pages::volunteers.edit', ['volunteer' => $volunteer->id])
        ->assertStatus(200);

});
