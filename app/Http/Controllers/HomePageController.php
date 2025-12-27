<?php

namespace App\Http\Controllers;

use App\Enums\AnimalStatus;
use App\Models\Animal;

class HomePageController extends Controller
{
    public function index()
    {
        $animals = Animal::where('state', AnimalStatus::Available)->orderBy('animals.created_at')->paginate(5);
        return view('public.homepage', compact('animals'));
    }
}
