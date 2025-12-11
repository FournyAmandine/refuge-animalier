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

    #[Validate('array')]
    public $availability = [
        'monday' => ['active' => false, 'start' => null, 'end' => null],
        'tuesday' => ['active' => false, 'start' => null, 'end' => null],
        'wednesday' => ['active' => false, 'start' => null, 'end' => null],
        'thursday' => ['active' => false, 'start' => null, 'end' => null],
        'friday' => ['active' => false, 'start' => null, 'end' => null],
        'saturday' => ['active' => false, 'start' => null, 'end' => null],
        'sunday' => ['active' => false, 'start' => null, 'end' => null],
    ];

    public function setVolunteer(Volunteer $volunteer)
    {
        $this->volunteer = $volunteer;
        $this->last_name = $volunteer->last_name;
        $this->first_name = $volunteer->first_name;
        $this->birth_date = $volunteer->birth_date;
        $this->email = $volunteer->email;
        $this->availability = $volunteer->availability;
    }

    public function store()
    {
        $this->validate();
        Volunteer::create(
            $this->only([
                'last_name',
                'first_name',
                'birth_date',
                'email',
                'availability',
            ])
        );
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
                    'availability',
                ]
            )
        );
    }
}
