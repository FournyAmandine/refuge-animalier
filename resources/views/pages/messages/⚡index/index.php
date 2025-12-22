<?php

use App\Models\Message;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public bool $isOpenShowModal = false;

    public string|Message $openMessage = '';

    public function toggleReadMessage(Message $message){
        $message->update([
            'read'=> !$message->done,
        ]);
    }
    public function render()
    {
        return view('pages.messages.⚡index.index', [
            'messages_unread' => Message::orderBy('created_at', 'desc')->where('messages.read', 0)->get(),
            'messages_read' => Message::orderBy('created_at', 'desc')->where('messages.read', 1)->get(),
        ]);
    }

    #[On ('toggleModal')]
    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'show') {
            $this->isOpenShowModal = !$this->isOpenShowModal;
        }

        $this->isOpenShowModal? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->openMessage = $id !== '' ? Message::find($id) : '';
    }

    public function markRead():void
    {
        $this->toggleReadMessage($this->openMessage);
        $this->dispatch('close-modal');
        $this->toggleModal('show');
    }

};
