<?php

use App\Livewire\Forms\TaskEditForm;
use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

new class extends Component
{

    public TaskEditForm $form;
    public Task $task;
    public string|Task $chosenTask = '';
    public bool $isOpenDeleteModal = false;
    public bool $isOpenCreateModal = false;
    public bool $isOpenEditModal = false;

    #[Title('Vos tâches')]

    public function toggleDoneTask(Task $task){
        $task->update([
            'done'=> !$task->done,
        ]);
    }

    public function render()
    {
        return view('pages.tasks.⚡index.index', [
            'tasks_undone' => auth()->user()->task()->orderBy('created_at', 'desc')->where('tasks.done', 0)->get(),
            'tasks_done' => auth()->user()->task()->orderBy('created_at', 'desc')->where('tasks.done', 1)->get()
        ]);
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'create') {
            $this->isOpenCreateModal = !$this->isOpenCreateModal;
        } elseif ($modal === 'edit') {
            $this->isOpenEditModal = !$this->isOpenEditModal;
        } elseif ($modal === 'delete') {
            $this->isOpenDeleteModal = !$this->isOpenDeleteModal;
        }

        $this->isOpenCreateModal || $this->isOpenEditModal || $this->isOpenDeleteModal ? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->chosenTask = $id !== '' ? Task::find($id) : '';
        if ($id !== '' && $modal === 'edit' ) {
           $this->form->setTask($this->chosenTask);
        }
    }

    public function delete(): void
    {
        $this->chosenTask->delete();

        $this->dispatch('close-modal');
        $this->toggleModal('delete');
    }

    #[On('task_list_changed')]
    public function reset_task_list()
    {
        unset($this->task);
    }

    public function save(): void
    {

        $this->chosenTask->update([
            'task_name' => $this->form->task_name
        ]);

        $this->dispatch('close-modal');
        $this->toggleModal('edit');
    }

    public function store()
    {
        $this->form->store();
        $this->form->task_name = '';
        $this->toggleModal('create');
    }
};
