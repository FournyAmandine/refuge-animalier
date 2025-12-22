<?php

use App\Livewire\Forms\VolunteerEditForm;
use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public VolunteerEditForm $form;

    public function store()
    {
        $volunteer = $this->form->store();

        return redirect()->route('admin.volunteers.show', $volunteer->id);
    }
};
