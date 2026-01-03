<?php

namespace App\Http\Controllers;

use App\Enums\AnimalStatus;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $term = '';

    public function index(Request $request)
    {
        $term = $request->query('term');

        $animals = Animal::where('state', AnimalStatus::Available)->when($term, function($query) use ($term) {
            $query->where('name', 'like', '%' . $term . '%');
        })->paginate(8)->withQueryString();
        return view('public.animals.index', compact('animals', 'term'));
    }

    public function show(Animal $animal)
    {
        $animals = Animal::where('state', AnimalStatus::Available)
            ->where('id', '!=', $animal->id)
            ->orderBy('animals.created_at')
            ->paginate(5);
        return view('public.animals.show', compact('animals', 'animal'));
    }
}
