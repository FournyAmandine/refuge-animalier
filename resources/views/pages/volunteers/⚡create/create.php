<?php

use App\Livewire\Forms\VolunteerEditForm;
use App\Models\Volunteer;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public VolunteerEditForm $form;

    #[Title('Créer un bénévole')]
    public function store()
    {
        $volunteer = $this->form->store();

        return redirect()->route('admin.volunteers.show', $volunteer->id);
    }
};
