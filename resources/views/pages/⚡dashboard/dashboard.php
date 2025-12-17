<?php

use App\Models\Animal;
use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return view('pages.⚡dashboard.dashboard', [
            'volunteers' => Volunteer::paginate(3), 'animals'=>Animal::paginate(3)
        ]);
    }
};
