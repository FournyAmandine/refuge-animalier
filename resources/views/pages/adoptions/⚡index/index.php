<?php

use App\Models\Adoption;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

new class extends Component
{
    public bool $isOpenShowModal = false;

    public string|Adoption $openAdoption = '';

    #[Title('Vos demandes d’adoptions')]
    public function toggleValidateAdoption(Adoption $adoptions){
        $adoptions->update([
            'validate'=> !$adoptions->validate,
        ]);
    }
    public function render()
    {
        return view('pages.adoptions.⚡index.index', [
            'adoptions_non_validate' => Adoption::orderBy('created_at', 'desc')->with('animal')->where('adoptions.validate', 0)->get(),
            'adoptions_validate' => Adoption::orderBy('created_at', 'desc')->with('animal')->where('adoptions.validate', 1)->get(),
        ]);
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'show') {
            $this->isOpenShowModal = !$this->isOpenShowModal;
        }

        $this->isOpenShowModal? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->openAdoption = $id !== '' ? Adoption::find($id) : '';
    }

    public function markValidate():void
    {
        $this->toggleValidateAdoption($this->openAdoption);
        $this->dispatch('close-modal');
        $this->toggleModal('show');
    }
};
