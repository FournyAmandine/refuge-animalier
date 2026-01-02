<?php

namespace App\Http\Controllers;

use App\Enums\AnimalStatus;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = auth()->user()->animals()->where('state', AnimalStatus::Available)->paginate(8);
        return view('public.animals.index', compact('animals'));
    }

    public function show(Animal $animal)
    {
        $animals = auth()->user()->animals()->where('state', AnimalStatus::Available)
            ->where('id', '!=', $animal->id)
            ->orderBy('animals.created_at')
            ->paginate(5);
        return view('public.animals.show', compact('animals', 'animal'));
    }
}
