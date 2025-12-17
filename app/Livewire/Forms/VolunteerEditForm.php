<?php

namespace App\Livewire\Forms;

use App\Models\Volunteer;
use Livewire\Attributes\Validate;
use Livewire\Form;

class VolunteerEditForm extends Form
{
    public ?Volunteer $volunteer;

    #[Validate('required|string')]
    public $last_name = '';

    #[Validate('required|string')]
    public $first_name = '';

    #[Validate('required|date')]
    public $birth_date = '';

    #[Validate('required|string')]
    public $email = '';

    #[Validate('required|string')]
    public $telephone = '';

    #[Validate('string')]
    public $link_animal = '';

    #[Validate('string')]
    public $profil_path = 'assets/img/icones/profil_volunteer.png';

    #[Validate('array')]
    public array $availabilities = [
        'Lundi' => ['active' => false, 'start' => null, 'end' => null],
        'Mardi' => ['active' => false, 'start' => null, 'end' => null],
        'Mercredi' => ['active' => false, 'start' => null, 'end' => null],
        'Jeudi' => ['active' => false, 'start' => null, 'end' => null],
        'Vendredi' => ['active' => false, 'start' => null, 'end' => null],
        'Samedi' => ['active' => false, 'start' => null, 'end' => null],
        'Dimanche' => ['active' => false, 'start' => null, 'end' => null],
    ];

    public function setVolunteer(Volunteer $volunteer)
    {
        $this->volunteer = $volunteer;
        $this->last_name = $volunteer->last_name;
        $this->first_name = $volunteer->first_name;
        $this->birth_date = $volunteer->birth_date;
        $this->email = $volunteer->email;
        $this->telephone = $volunteer->telephone;
        $this->profil_path = $volunteer->profil_path;
        $this->link_animal = $volunteer->link_animal;
        foreach ($volunteer->availabilities??[] as $availability) {
            $this->availabilities[$availability->day] = [
                'active' => true,
                'start' => $availability->start,
                'end' => $availability->end
            ];
        }
    }

    public function store()
    {
        $this->validate();
        $volunteer = Volunteer::create(
            $this->only([
                'last_name',
                'first_name',
                'birth_date',
                'email',
                'telephone',
                'profil_path',
                'link_animal'
            ])
        );

        foreach ($this->availabilities as $day => $data) {
            if ($data['active']) {
                $volunteer->availabilities()->create([
                    'day' => $day,
                    'start' => $data['start'],
                    'end' => $data['end'],
                ]);
            }
        }
    }

    public function update()
    {
        $this->validate();

        $this->volunteer->update(
            $this->only(
                [
                    'last_name',
                    'first_name',
                    'birth_date',
                    'email',
                    'telephone',
                    'profil_path',
                    'link_animal'
                ]
            )
        );
        $this->volunteer->availabilities()->delete();

        foreach ($this->availabilities as $day => $data) {
            if ($data['active']) {
                $this->volunteer->availabilities()->create([
                    'day' => $day,
                    'start' => $data['start'],
                    'end' => $data['end'],
                ]);
            }
        }
    }
}
