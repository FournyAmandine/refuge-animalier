<?php

use App\Models\Adoption;
use App\Notifications\AdoptionResponse;
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
            'adoptions_non_validate' => auth()->user()->adoptions()->orderBy('created_at', 'desc')->with('animal')->where('adoptions.validate', 0)->get(),
            'adoptions_validate' => auth()->user()->adoptions()->orderBy('created_at', 'desc')->with('animal')->where('adoptions.validate', 1)->get(),
        ]);
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'show') {
            $this->isOpenShowModal = !$this->isOpenShowModal;
        }

        $this->isOpenShowModal? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->openAdoption = $id !== '' ? auth()->user()->adoptions()->find($id) : '';
    }

    public function markValidate():void
    {
        $this->toggleValidateAdoption($this->openAdoption);
        $this->openAdoption->notify(
            new AdoptionResponse($this->openAdoption, 'accepted')
        );
        $this->dispatch('close-modal');
        $this->toggleModal('show');
    }

    public function markNoValidate():void
    {
        $this->openAdoption->notify(
            new AdoptionResponse($this->openAdoption, 'refused')
        );
        $this->dispatch('close-modal');
        $this->toggleModal('show');
    }

};
