<?php

use App\Livewire\Forms\VolunteerEditForm;
use App\Models\Volunteer;
use Livewire\Attributes\Title;
use Livewire\Component;

new class extends Component
{
    public VolunteerEditForm $form;

    public $volunteer;
    public $availabilities;


    public function render()
    {
        return view('pages.volunteers.⚡show.show')->title($this->volunteer->first_name . ' ' . $this->volunteer->last_name);
    }

    public function mount($volunteer): void
    {
        $this->volunteer = Volunteer::findOrFail($volunteer);
        $this->availabilities = $this->volunteer->availabilities;
        $this->form->setVolunteer($this->volunteer);
    }
};
