<?php

use App\Livewire\Forms\VolunteerEditForm;
use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public VolunteerEditForm $form;

    public $volunteer;
    public $availabilities;

    public function mount($volunteer): void
    {
        $this->volunteer = Volunteer::findOrFail($volunteer);
        $this->availabilities = $this->volunteer->availabilities;
        $this->form->setVolunteer($this->volunteer);
    }
};
