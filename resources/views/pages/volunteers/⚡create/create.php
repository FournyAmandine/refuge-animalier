<?php

use App\Livewire\Forms\VolunteerEditForm;
use App\Models\Volunteer;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public VolunteerEditForm $form;

    public function store()
    {
        $volunteer = $this->form->store();

        return redirect()->route('admin.volunteers.show', $volunteer->id);
    }
};
