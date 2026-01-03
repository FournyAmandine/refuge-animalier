<?php

use App\Models\Volunteer;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

new class extends Component
{

    public string $term = '';
    public $sortField = 'created_at';
    public $sortOrder = 'asc';
    public string|Volunteer $chosenVolunteer = '';
    public bool $isOpenDeleteModal = false;
    #[Title('Vos bénévoles')]

    #[Computed]
    public function render()
    {
        return view('pages.volunteers.⚡index.index', [
            'volunteers' => auth()->user()->volunteers()->where('first_name', 'like', '%' . $this->term . '%')->orWhere('last_name', 'like', '%' . $this->term . '%')->orderBy($this->sortField, $this->sortOrder)->paginate(6),
        ]);
    }

    public function sortBy($field){
        if ($this->sortField === $field){
            $this->sortOrder= $this->sortOrder === 'asc' ? 'desc' : 'asc';
        } else{
            $this->sortField = $field;
            $this->sortOrder = 'asc';
        }
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'delete') {
            $this->isOpenDeleteModal = !$this->isOpenDeleteModal;
        }

        $this->isOpenDeleteModal ? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->chosenVolunteer = $id !== '' ? Volunteer::find($id) : '';
    }

    public function delete(): void
    {
        $this->chosenVolunteer->delete();
        $this->dispatch('close-modal');
        $this->toggleModal('delete');
    }
};
