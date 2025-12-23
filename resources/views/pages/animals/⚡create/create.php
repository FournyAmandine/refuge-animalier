<?php

use App\Livewire\Forms\AnimalEditForm;
use Livewire\Component;
use Livewire\WithFileUploads;


new class extends Component
{

    use WithFileUploads;

    public AnimalEditForm $form;
    public function store()
    {
        $animal = $this->form->store();
        return redirect()->route('admin.animals.show', $animal->id);
    }

    public function getStatus()
    {
        return \App\Enum\AnimalStatus::cases();
    }

};
