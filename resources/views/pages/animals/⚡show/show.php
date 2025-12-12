<?php

use App\Livewire\Forms\AnimalEditForm;
use App\Models\Animal;
use Livewire\Component;

new class extends Component
{
    public AnimalEditForm $form;

    public $animal;

    public function mount($animal): void
    {
        $this->animal = Animal::findOrFail($animal);
        $this->form->setAnimal($this->animal);
    }
};
