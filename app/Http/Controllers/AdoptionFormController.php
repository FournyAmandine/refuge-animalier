<?php

namespace App\Http\Controllers;

use App\Enums\AnimalStatus;
use App\Models\Animal;

class AdoptionFormController extends Controller
{
    public function index()
    {
        $animals = Animal::where('state', AnimalStatus::Available)->get();
        return view('public.adoptionpage', compact('animals'));
    }
}
