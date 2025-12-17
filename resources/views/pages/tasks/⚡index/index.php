<?php

use App\Livewire\Forms\TaskEditForm;
use App\Models\Task;
use Livewire\Component;

new class extends Component
{

    public TaskEditForm $form;
    public Task $task;

    public function toggleDoneTask(Task $task){
        $task->update([
            'done'=> !$task->done,
        ]);
    }
    public function render()
    {
        return view('pages.tasks.⚡index.index', [
            'tasks_undone' => Task::orderBy('created_at')->where('tasks.done', 0)->get(),
            'tasks_done' => Task::orderBy('created_at')->where('tasks.done', 1)->get()
        ]);
    }
};
