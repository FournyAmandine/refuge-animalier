<?php

use App\Models\ContactMessage;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

new class extends Component
{
    public bool $isOpenShowModal = false;

    public string|\App\Models\VolunteerMessage $openMessage = '';

    #[Title('Vos contact_messages')]
    public function toggleReadMessage(\App\Models\VolunteerMessage $message){
        $message->update([
            'read'=> !$message->done,
        ]);
    }
    public function render()
    {
        return view('pages.⚡volunteer_messages.volunteer_messages', [
            'messages_unread' => auth()->user()->volunteer_messages()->orderBy('created_at', 'desc')->where('read', 0)->get(),
            'messages_read' => auth()->user()->volunteer_messages()->orderBy('created_at', 'desc')->where('read', 1)->get(),
        ]);
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'show') {
            $this->isOpenShowModal = !$this->isOpenShowModal;
        }

        $this->isOpenShowModal? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->openMessage = $id !== '' ? auth()->user()->volunteer_messages()->find($id) : '';
    }

    public function markRead():void
    {
        $this->toggleReadMessage($this->openMessage);
        $this->dispatch('close-modal');
        $this->toggleModal('show');
    }

};
