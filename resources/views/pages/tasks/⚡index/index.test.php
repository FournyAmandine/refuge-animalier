<?php

use App\Models\Task;
use App\Models\User;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

beforeEach(function(){
    $this->user = User::factory()->create(['role' => \App\Enums\UserRole::Administrator]);
    actingAs($this->user);
});

it('renders successfully', function () {

    Livewire::test('pages::tasks.index')
        ->assertStatus(200);
});


it('displays successfully the list of tasks', function () {

    $task = Task::factory()->create([
        'user_id' => $this->user,
    ]);

    Livewire::test('pages::tasks.index')
        ->assertSee($task->task_name);

});


it('opens the delete modal when the method is called', function () {
    $task = Task::factory()->create([
        'user_id' => $this->user,
    ]);

    Livewire::test('pages::tasks.index')
        ->assertSet('isOpenDeleteModal', false)
        ->call('toggleModal', 'delete', $task->id)
        ->assertSet('isOpenDeleteModal', true)
        ->assertSee($task->task_name);
});


it('opens the create modal when the method is called', function () {
    $task = Task::factory()->create([
        'user_id' => $this->user,
    ]);

    Livewire::test('pages::tasks.index')
        ->assertSet('isOpenCreateModal', false)
        ->call('toggleModal', 'create', $task->id)
        ->assertSet('isOpenCreateModal', true)
        ->assertSee($task->task_name);
});

it('opens the edit modal when the method is called', function () {
    $task = Task::factory()->create([
        'user_id' => $this->user,
    ]);

    Livewire::test('pages::tasks.index')
        ->assertSet('isOpenEditModal', false)
        ->call('toggleModal', 'edit', $task->id)
        ->assertSet('isOpenEditModal', true)
        ->assertSee($task->task_name);
});

