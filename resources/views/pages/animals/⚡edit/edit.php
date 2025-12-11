<?php

use App\Livewire\Forms\AnimalEditForm;
use App\Models\Animal;
use Livewire\Component;

new class extends Component
{
    public AnimalEditForm $form;

    public $animal;

    public function mount(string $animal): void
    {
        $this->animal = Animal::findOrFail($animal);
        $this->form->setAnimal($this->animal);
    }
    public function save()
    {
        $this->form->update();
        return $this->redirect(route('admin.animals.create'));
    }
};
