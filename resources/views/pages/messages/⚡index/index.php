<?php

use App\Models\ContactMessage;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

new class extends Component
{
    public bool $isOpenShowModal = false;

    public string|ContactMessage $openMessage = '';

    #[Title('Vos messages')]
    public function toggleReadMessage(ContactMessage $message){
        $message->update([
            'read'=> !$message->done,
        ]);
    }
    public function render()
    {
        return view('pages.messages.⚡index.index', [
            'messages_unread' => ContactMessage::orderBy('created_at', 'desc')->where('messages.read', 0)->get(),
            'messages_read' => ContactMessage::orderBy('created_at', 'desc')->where('messages.read', 1)->get(),
        ]);
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'show') {
            $this->isOpenShowModal = !$this->isOpenShowModal;
        }

        $this->isOpenShowModal? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->openMessage = $id !== '' ? ContactMessage::find($id) : '';
    }

    public function markRead():void
    {
        $this->toggleReadMessage($this->openMessage);
        $this->dispatch('close-modal');
        $this->toggleModal('show');
    }

};
