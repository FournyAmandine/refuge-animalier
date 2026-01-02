<?php

use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

beforeEach(function(){
    $this->user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($this->user);
});


it('renders successfully', function () {

    Livewire::test('pages::profil')
        ->assertStatus(200);
});
