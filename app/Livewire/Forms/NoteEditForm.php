<?php

namespace App\Livewire\Forms;

use App\Models\Notes;
use Livewire\Attributes\Validate;
use Livewire\Form;

class NoteEditForm extends Form
{
    public ?Notes $note;

    #[Validate('required|string')]
    public $note_name = '';

    #[Validate('required|date')]
    public $visit_date = '';

    #[Validate('required|string')]
    public $content = '';

    #[Validate('required|integer')]
    public $animal_id = '';

    public function setNote(Notes $note)
    {
        $this->note = $note;
        $this->note_name = $note->note_name;
        $this->visit_date = $note->visit_date;
        $this->content = $note->content;
        $this->animal_id = $note->animal_id;
    }

    public function store()
    {

        $this->validate();
        Notes::create(
            $this->only([
                'note_name',
                'visit_date',
                'content',
                'animal_id'
            ])
        );
    }

    public function update()
    {
        $this->validate();

        $this->note->update(
            $this->only([
                'note_name',
                'visit_date',
                'content',
                'animal_id'
            ])
        );
    }
}
