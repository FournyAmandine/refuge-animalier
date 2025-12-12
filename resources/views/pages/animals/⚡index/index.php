<?php

use App\Models\Animal;
use Illuminate\Pagination\LengthAwarePaginator;
use LaravelIdea\Helper\App\Models\_IH_Animal_C;
use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return view('pages.animals.⚡index.index', [
            'animals' => Animal::orderBy('arrival_date')->paginate(8),
        ]);
    }
};
