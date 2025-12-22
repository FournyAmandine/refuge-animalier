<?php

use App\Enum\AnimalStatus;
use App\Livewire\Forms\AnimalEditForm;
use App\Models\Animal;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public AnimalEditForm $form;

    public $animal;

    public string|Animal $chosenAnimal = '';

    public bool $isOpenDeleteModal = false;

    public function mount($animal): void
    {
        $this->animal = Animal::findOrFail($animal);
        $this->form->setAnimal($this->animal);
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'delete') {
            $this->isOpenDeleteModal = !$this->isOpenDeleteModal;
        }

        $this->isOpenDeleteModal ? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->chosenAnimal = $id !== '' ? $this->animal : '';
    }

    public function delete(): void
    {
        $this->chosenAnimal->delete();
        $this->dispatch('close-modal');
        $this->toggleModal('delete');
        $this->redirect(route('admin.animals.index'));
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
