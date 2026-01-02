<?php

namespace App\Http\Controllers;

use App\Enums\AnimalStatus;
use App\Enums\UserRole;
use App\Http\Requests\AdoptionFormRequest;
use App\Models\Adoption;
use App\Models\Animal;
use App\Models\User;
use App\Notifications\NewAdoptionRequest;
use Illuminate\Support\Facades\Notification;

class AdoptionFormController extends Controller
{
    public function index()
    {
        $animals = Animal::where('state', AnimalStatus::Available)->get();
        return view('public.adoptionpage', compact('animals'));
    }

    public function store(AdoptionFormRequest $request){

        $validated = $request->validated();

        if (auth()->check()) {
            $validated['user_id'] = auth()->id();
        }

        $adoption = Adoption::create($validated);

        $admin = User::where('role', '=', UserRole::Administrator)->get();

        Notification::send($admin, new NewAdoptionRequest($adoption));

        return redirect()->back()->with('success', 'Merci pour votre demande, on vous recontacte dans les plus bref délais !');
    }
}
