<?php

use App\Enums\AnimalStatus;
use App\Livewire\Forms\AnimalEditForm;
use App\Livewire\Forms\NoteEditForm;
use App\Models\Animal;
use App\Models\Notes;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public AnimalEditForm $form;

    public NoteEditForm $note_form;

    public $animal;

    public Notes $note;

    public string|Animal $chosenAnimal = '';

    public string|Notes $chosenNote = '';

    public bool $isOpenDeleteModal = false;

    public bool $isOpenNoteModal = false;

    public bool $isOpenNoteModifyModal = false;

    public bool $isOpenNoteDeleteModal = false;

    public function render()
    {
        return view('pages.animals.⚡show.show')->title($this->animal->name);
    }
    public function mount($animal): void
    {
        $this->animal = Animal::with('notes')->findOrFail($animal);
        $this->form->setAnimal($this->animal);
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'delete') {
            $this->isOpenDeleteModal = !$this->isOpenDeleteModal;
            $this->chosenAnimal = $id !== '' ? $this->animal : '';
        }

        if ($modal === 'note') {
            $this->isOpenNoteModal = !$this->isOpenNoteModal;
        }

        if ($modal === 'modify') {
            $this->isOpenNoteModifyModal = !$this->isOpenNoteModifyModal;
        }

        if ($modal === 'delete_note') {
            $this->isOpenNoteDeleteModal = !$this->isOpenNoteDeleteModal;
        }

        $this->isOpenDeleteModal || $this->isOpenNoteModal || $this->isOpenNoteModifyModal || $this->isOpenNoteDeleteModal ? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        if ($modal === 'modify' || $modal === 'delete_note' || $modal === 'note'){
            $this->chosenNote = $id !== '' ? Notes::find($id) : '';
        }
        if ($id !== '' && $modal === 'modify' ) {
            $this->note_form->setNote($this->chosenNote);
        }
    }

    public function delete(): void
    {
        $this->chosenAnimal->delete();
        $this->dispatch('close-modal');
        $this->toggleModal('delete');
        $this->redirect(route('admin.animals.index'));
    }

    public function delete_note(): void
    {
        $this->chosenNote->delete();
        $this->dispatch('close-modal');
        $this->toggleModal('delete_note');
    }

    public function enumNameToValue(string $state): string
    {
        foreach (AnimalStatus::cases() as $status) {
            if ($status->name === $state) {
                return $status->value;
            }
        }

        return $state;
    }

    public function save(): void
    {
        $this->chosenNote->update([
            'name' => $this->note_form->note_name,
            'visit_date' => $this->note_form->visit_date,
            'content' => $this->note_form->content
        ]);
        $this->note_form->note_name = '';
        $this->note_form->content = '';
        $this->note_form->visit_date = '';
        $this->dispatch('close-modal');
        $this->toggleModal('modify');
    }


    public function store()
    {
        $this->note_form->animal_id = $this->animal->id;
        $this->note_form->store();
        $this->note_form->note_name = '';
        $this->note_form->content = '';
        $this->note_form->visit_date = '';
        $this->dispatch('close-modal');
        $this->toggleModal('note');
    }
};
