<?php

use App\Enums\AnimalStatus;
use App\Enums\AnimalVaccines;
use App\Livewire\Forms\AnimalEditForm;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;


new class extends Component
{

    use WithFileUploads;

    public AnimalEditForm $form;

    #[Title('Créer un animal')]
    public function store()
    {
        $animal = $this->form->store();
        return redirect()->route('admin.animals.show', $animal->id);
    }

    public function getStatus()
    {
        return AnimalStatus::cases();
    }

    public function getVaccines()
    {
        return AnimalVaccines::cases();
    }

};
