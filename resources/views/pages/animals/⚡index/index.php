<?php

use App\Enums\AnimalStatus;
use App\Models\Animal;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;
    public string $term = '';
    public $sortField = 'created_at';
    public $sortOrder = 'asc';
    public string|Animal $chosenAnimal = '';

    public bool $isOpenDeleteModal = false;

    #[Title('Vos animaux')]
    public function render()
    {
        return view('pages.animals.⚡index.index', [
            'animals' => Animal::where('name', 'like', '%' . $this->term . '%')->orderBy($this->sortField, $this->sortOrder)->paginate(8),
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
        $this->chosenAnimal = $id !== '' ? Animal::find($id) : '';
    }

    public function delete(): void
    {
        $this->chosenAnimal->delete();
        $this->dispatch('close-modal');
        $this->toggleModal('delete');
    }

    public function enumNameToValue(string $state): string
    {
        foreach (AnimalStatus::cases() as $status) {
            if ($status->name === $state) {
                return $status->value;
            }
        }

        return $state;
    }
};
