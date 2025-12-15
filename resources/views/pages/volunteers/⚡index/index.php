<?php

use App\Models\Volunteer;
use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return view('pages.volunteers.⚡index.index', [
            'volunteers' => Volunteer::paginate(6),
        ]);
    }
};
