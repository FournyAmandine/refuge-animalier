<?php

use App\Livewire\Forms\TaskEditForm;
use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{

    public TaskEditForm $form;
    public Task $task;
    public string|Task $chosenTask = '';
    public bool $isOpenDeleteModal = false;
    public bool $isOpenCreateModal = false;
    public bool $isOpenEditModal = false;

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

    public function modify(string $id){
        $this->dispatch('open_modal', [
            'modal' => 'modals::task_modify',
            'modal_id' => $id
        ]);
    }

};
