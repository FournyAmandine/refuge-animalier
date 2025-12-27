<?php

use App\Enums\AnimalStatus;
use App\Models\Adoption;
use App\Models\Animal;
use App\Models\Message;
use App\Models\Task;
use App\Models\Volunteer;
use Livewire\Attributes\Title;
use Livewire\Component;

new class extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        return view('pages.⚡dashboard.dashboard', [
            'volunteers' => Volunteer::paginate(3),
            'animals'=> Animal::paginate(3),
            'adoptions'=> Adoption::with('animal')->paginate(3),
            'messages'=> Message::paginate(3),
            'tasks'=> Task::paginate(3),
            'welcome' => Animal::count(),
            'adopted' => Animal::where('state', '=', AnimalStatus::Adopted)->count(),
            'in' => Animal::whereIn('state', [AnimalStatus::Available, AnimalStatus::Care, AnimalStatus::Pending, AnimalStatus::Draft])->count(),
            'care' => Animal::where('state', '=', AnimalStatus::Care)->count(),
            'pending' => Animal::where('state', '=', AnimalStatus::Pending)->count(),
            'draft' => Animal::where('state', '=', AnimalStatus::Draft)->count(),
        ]);
    }
};
