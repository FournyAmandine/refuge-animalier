<?php

namespace App\Http\Controllers;

use App\Enum\AnimalStatus;
use App\Models\Animal;

class AdoptionFormController extends Controller
{
    public function index()
    {
        $animals = Animal::where('state', AnimalStatus::Available);
        return view('public.adoptionpage', compact('animals'));
    }
}
