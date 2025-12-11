<?php

use App\Livewire\Forms\VolunteerEditForm;
use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public VolunteerEditForm $form;

    public $volunteer;

    public function mount(string $volunteer): void
    {
        $this->volunteer = Volunteer::findOrFail($volunteer);
        $this->form->setVolunteer($this->volunteer);
    }
    public function save()
    {
        $this->form->update();
        return $this->redirect(route('admin.volunteers.create'));
    }

};
