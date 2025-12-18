<?php

use App\Models\Task;
use Livewire\Component;

new class extends Component
{

    public Task $task;

    public function mount(string $model_id):void
    {
        $this->task = Task::findOrFail($model_id);
    }

    public function delete()
    {
        $this->task->delete();

        $this->dispatch('task_list_changed');
        $this->dispatch('close_modal');
    }
};
