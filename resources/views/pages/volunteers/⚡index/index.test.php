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
    Livewire::test('pages::volunteers.index')
        ->assertStatus(200)
        ->assertSeeLivewire('pages::volunteers.index');
});

it('displays successfully the list of volunteers', function () {

    $volunteers  = Volunteer::factory()->count(3)->create([
        'user_id' => $this->user->id
    ]);


    Livewire::test('pages::volunteers.index')
        ->assertSee($volunteers[0]->name)
        ->assertSee($volunteers[1]->name)
        ->assertSee($volunteers[2]->name);

});

it('opens the modal when the method is called', function () {
    $volunteer = Volunteer::factory()->create([
            'user_id' => $this->user->id
    ]);

    Livewire::test('pages::volunteers.index')
        ->assertSet('isOpenDeleteModal', false)
        ->call('toggleModal', 'delete', $volunteer->id)
        ->assertSet('isOpenDeleteModal', true)
        ->assertSee($volunteer->first_name, $volunteer->last_name);
});

it('deletes a volunteer and closes the modal', function () {
    $volunteer = Volunteer::factory()->create([
            'user_id' => $this->user->id
    ]);

    Livewire::test('pages::volunteers.index')
        ->call('toggleModal', 'delete', $volunteer->id)
        ->call('delete');

    $this->assertDatabaseMissing('volunteers', ['id' => $volunteer->id]);
});
