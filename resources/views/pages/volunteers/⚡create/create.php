<?php

use App\Livewire\Forms\VolunteerEditForm;
use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{

    public VolunteerEditForm $form;
    public function store()
    {
        $this->form->store();
        return $this->redirect('/admin/volunteers', navigate: true);
    }

    public function render()
    {
        return view('pages.volunteers.⚡create.create', ['volunteers' => Volunteer::paginate(6)]);
    }

};
