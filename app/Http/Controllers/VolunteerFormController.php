<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Http\Requests\VolunteerFormRequest;
use App\Models\User;
use App\Models\Volunteer;
use App\Models\VolunteerMessage;
use App\Notifications\NewContactMessage;
use App\Notifications\NewVolunteerMessage;
use Illuminate\Support\Facades\Notification;

class VolunteerFormController extends Controller
{
    public function index()
    {
        return view('public.volunteerpage');
    }

    public function store(VolunteerFormRequest $request)
    {
        $validated = $request->validated();

        $message = VolunteerMessage::create($validated);

        $admin = User::where('role', '=', UserRole::Administrator)->get();

        Notification::send($admin, new NewVolunteerMessage($message));

        return redirect()->back()->with('success', 'Merci, le message pour du bénévolat a bien été envoyé ! On vous recontacte dans les plus bref délais');
    }
}
