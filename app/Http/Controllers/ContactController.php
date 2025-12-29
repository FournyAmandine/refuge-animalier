<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Http\Requests\ContactFormRequest;
use App\Models\ContactMessage;
use App\Models\User;
use App\Notifications\NewAdoptionRequest;
use App\Notifications\NewMessage;
use http\Message;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index()
    {

    }
    public function store(ContactFormRequest $request){
        $validated = $request->validated();

        $message = ContactMessage::create($validated);

        $admin = User::where('role', '=', UserRole::Administrator)->get();

        Notification::send($admin, new NewMessage($message));

        return redirect()->back()->with('success', 'Le message a bien été envoyé !');
    }
}
