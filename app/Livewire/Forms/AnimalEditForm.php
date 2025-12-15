<?php

namespace App\Livewire\Forms;

use App\Models\Animal;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AnimalEditForm extends Form
{

    public ?Animal $animal;

    #[Validate('required|string')]
    public $name = '';

    #[Validate('required|string')]
    public $sexe = '';

    #[Validate('required|date')]
    public $birth_date = '';

    #[Validate('required|string')]
    public $type = '';

    #[Validate('string')]
    public $vaccines = '';

    #[Validate('string')]
    public $race = '';

    #[Validate('required|string')]
    public $state = '';

    #[Validate('required|string')]
    public $img_path = 'assets/img/icones/profil_animal.png';

    #[Validate('required|string')]
    public $coat = '';

    #[Validate('string')]
    public $description = '';


    public function setAnimal(Animal $animal)
    {
        $this->animal = $animal;
        $this->name = $animal->name;
        $this->sexe = $animal->sexe;
        $this->birth_date = $animal->birth_date;
        $this->type = $animal->type;
        $this->vaccines = $animal->vaccines;
        $this->race = $animal->race;
        $this->state = $animal->state;
        $this->img_path = $animal->img_path;
        $this->coat = $animal->coat;
        $this->description = $animal->description;
    }
    public function store()
    {
        $this->validate();
        Animal::create(
            $this->only([
                'name',
                'sexe',
                'birth_date',
                'type',
                'vaccines',
                'race',
                'state',
                'img_path',
                'coat',
                'description',
            ])
        );
    }

    public function update()
    {
        $this->validate();

        $this->animal->update(
            $this->only(
                [
                    'name',
                    'sexe',
                    'birth_date',
                    'type',
                    'vaccines',
                    'race',
                    'state',
                    'img_path',
                    'coat',
                    'description',
                ]
            )
        );
    }
}
