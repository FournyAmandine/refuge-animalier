<?php

use App\Models\Adoption;
use App\Models\Animal;
use App\Models\Message;
use App\Models\Task;
use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return view('pages.⚡dashboard.dashboard', [
            'volunteers' => Volunteer::paginate(3), 'animals'=>Animal::paginate(3), 'adoptions'=>Adoption::with('animal')->paginate(3), 'messages'=>Message::paginate(3), 'tasks'=>Task::paginate(3)
        ]);
    }
};
