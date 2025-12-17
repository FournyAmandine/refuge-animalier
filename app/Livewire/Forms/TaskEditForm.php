<?php

namespace App\Livewire\Forms;

use App\Models\Task;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskEditForm extends Form
{
    public ?Task $task;
    #[Validate('required|string')]
    public $task_name = '';

    #[Validate('boolean')]
    public $done = false;

    public function setTask(Task $task)
    {
        $this->task = $task;
        $this->task_name = $task->task_name;
        $this->done = $task->done;
    }

    public function store()
    {
        $this->validate();
        Task::create(
            $this->only([
                'task_name',
                'done'
            ])
        );
    }

    public function update()
    {
        $this->validate();

        $this->animal->update(
            $this->only([
                'task_name',
                'done'
            ])
        );
    }
}
