<?php

namespace App\Http\Controllers;

use App\Enum\AnimalStatus;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::where('state', AnimalStatus::Available)->paginate(8);
        return view('public.animals.index', compact('animals'));
    }

    public function show(Animal $animal)
    {
        $animals = Animal::where('state', AnimalStatus::Available)
            ->where('id', '!=', $animal->id)
            ->orderBy('animals.created_at')
            ->paginate(4);
        return view('public.animals.show', compact('animals', 'animal'));
    }
}
