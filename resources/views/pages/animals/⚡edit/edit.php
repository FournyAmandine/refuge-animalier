<?php

use App\Livewire\Forms\AnimalEditForm;
use App\Models\Animal;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public AnimalEditForm $form;

    public $animal;

    public function mount($animal): void
    {
        $this->animal = Animal::findOrFail($animal);
        $this->form->setAnimal($this->animal);
    }
    public function save()
    {
        $this->form->update();
        return $this->redirect(route('admin.animals.show', $this->animal->id));
    }

    public function getStatus()
    {
        return \App\Enum\AnimalStatus::cases();
    }
};
