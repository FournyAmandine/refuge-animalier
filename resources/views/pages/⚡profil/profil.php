<?php

use App\Enum\AnimalStatus;
use App\Livewire\Forms\UserEditForm;
use App\Models\Animal;
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
    #[Title('Votre profil')]

    public function render(){
        return view('pages.⚡profil.profil', [
            'welcome' => Animal::count(),
            'adopted' => Animal::where('state', '=', AnimalStatus::Adopted)->count(),
            'in' => Animal::whereIn('state', [AnimalStatus::Available, AnimalStatus::Care, AnimalStatus::Pending, AnimalStatus::Draft])->count(),
            'care' => Animal::where('state', '=', AnimalStatus::Care)->count(),
            'pending' => Animal::where('state', '=', AnimalStatus::Pending)->count(),
            'draft' => Animal::where('state', '=', AnimalStatus::Draft)->count(),
        ]);
    }

    public function mount(): void
    {
        $this->user = User::first();
        $this->form->setUser($this->user);
    }

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
