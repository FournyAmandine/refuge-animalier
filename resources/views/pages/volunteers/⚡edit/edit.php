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

    public $volunteer;
    #[Title('Modifier un bénévole')]

    public function render()
    {
        return view('pages.volunteers.⚡edit.edit')->title('Modifier ' . $this->volunteer->first_name . ' ' . $this->volunteer->last_name);
    }

    public function mount(string $volunteer): void
    {
        $this->volunteer = Volunteer::findOrFail($volunteer);
        $this->form->setVolunteer($this->volunteer);
    }
    public function save()
    {
        $this->form->update();
        return $this->redirect(route('admin.volunteers.show', $this->volunteer->id));
    }

};
