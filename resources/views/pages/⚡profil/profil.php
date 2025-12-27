<?php

use App\Livewire\Forms\UserEditForm;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;
    public bool $isOpenEditModal = false;

    public UserEditForm $form;

    public User $user;
    public function mount(): void
    {
        $this->user = User::first();
        $this->form->setUser($this->user);
    }
    #[Title('Profil')]

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'edit') {
            $this->isOpenEditModal = !$this->isOpenEditModal;
        }

        $this->isOpenEditModal? $this->dispatch('open-modal') : $this->dispatch('close-modal');
    }

    public function save(){
        $this->user->update([
            'name' => $this->form->name,
            'password' => $this->form->password,
            'email' => $this->form->email,
            'profil_picture' => $this->form->profil_picture
        ]);
        $this->dispatch('close-modal');
        $this->toggleModal('edit');
    }
};
