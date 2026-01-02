<?php

use App\Models\ContactMessage;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

beforeEach(function(){
    $this->user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($this->user);
});

it('renders successfully', function () {

    Livewire::test('pages::contact_messages.index')
        ->assertStatus(200);
});


it('displays successfully the list of messages', function () {

    $message = ContactMessage::factory()->create([
        'user_id' => $this->user,
    ]);

    Livewire::test('pages::contact_messages.index')
        ->assertSee($message->first_name)
        ->assertSee($message->last_name);

});


it('opens the modal when the method is called', function () {
    $message = ContactMessage::factory()->create([
        'user_id' => $this->user,
    ]);

    Livewire::test('pages::contact_messages.index')
        ->assertSet('isOpenShowModal', false)
        ->call('toggleModal', 'show', $message->id)
        ->assertSet('isOpenShowModal', true)
        ->assertSee($message->message);
});


