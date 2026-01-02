<?php

use App\Enums\AnimalStatus;
use App\Enums\AnimalVaccines;
use App\Enums\UserRole;
use App\Livewire\Forms\AnimalEditForm;
use App\Models\User;
use App\Notifications\NewAnimalCreated;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;


new class extends Component
{

    use WithFileUploads;

    public AnimalEditForm $form;

    public $name;

    #[Title('Créer un animal')]

    public function store()
    {


        $animal = $this->form->store();

        $admin = User::where('role', UserRole::Administrator)->get();

        Notification::send($admin, new NewAnimalCreated($animal));

        return redirect()->route('admin.animals.show', $animal->id);
    }

    public function getStatus()
    {
        return AnimalStatus::cases();
    }

    public function getVaccines()
    {
        return AnimalVaccines::cases();
    }

};
