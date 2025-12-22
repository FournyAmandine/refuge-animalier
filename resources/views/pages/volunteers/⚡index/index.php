<?php

use App\Models\Volunteer;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{

    public string|Volunteer $chosenVolunteer = '';
    public bool $isOpenDeleteModal = false;
    public function render()
    {
        return view('pages.volunteers.⚡index.index', [
            'volunteers' => Volunteer::orderBy('created_at', 'desc')->paginate(6),
        ]);
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'delete') {
            $this->isOpenDeleteModal = !$this->isOpenDeleteModal;
        }

        $this->isOpenDeleteModal ? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->chosenVolunteer = $id !== '' ? Volunteer::find($id) : '';
    }

    public function delete(): void
    {
        $this->chosenVolunteer->delete();
        $this->dispatch('close-modal');
        $this->toggleModal('delete');
    }

    #[On('volunteer_list_changed')]
    public function reset_volunteer_list()
    {
        unset($this->chosenVolunteer);
    }
};
