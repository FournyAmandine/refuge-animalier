<?php

use App\Enums\AnimalStatus;
use App\Models\Adoption;
use App\Models\Animal;
use App\Models\ContactMessage;
use App\Models\Task;
use App\Models\Volunteer;
use App\Models\VolunteerMessage;
use Livewire\Attributes\Title;
use Livewire\Component;

new class extends Component
{

    public bool $isOpenShowModal = false;

    public string|Adoption $openNotification = '';

    #[Title('Dashboard')]
    public function render()
    {
        return view('pages.⚡dashboard.dashboard', [
            'volunteers' => Volunteer::paginate(3),
            'animals'=> Animal::paginate(3),
            'adoptions'=> Adoption::with('animal')->paginate(3),
            'contact_messages'=> ContactMessage::paginate(3),
            'volunteer_messages'=> VolunteerMessage::paginate(3),
            'tasks'=> Task::paginate(3),
            'welcome' => Animal::count(),
            'adopted' => Animal::where('state', '=', AnimalStatus::Adopted)->count(),
            'in' => Animal::whereIn('state', [AnimalStatus::Available, AnimalStatus::Care, AnimalStatus::Pending, AnimalStatus::Draft])->count(),
            'care' => Animal::where('state', '=', AnimalStatus::Care)->count(),
            'pending' => Animal::where('state', '=', AnimalStatus::Pending)->count(),
            'draft' => Animal::where('state', '=', AnimalStatus::Draft)->count(),
            'notifications' => auth()->user()->unreadNotifications
        ]);
    }

    public function toggleModal(string $modal, $id = ''): void
    {
        if ($modal === 'notif') {
            $this->isOpenShowModal = !$this->isOpenShowModal;
        }

        $this->isOpenShowModal? $this->dispatch('open-modal') : $this->dispatch('close-modal');
        $this->openNotification = $id !== '' ? Notification::find($id) : '';
    }

    public function markAsRead(){
        auth()->user()->unreadNotifications->markAsRead();
        $this->dispatch('close-modal');
    }
};
