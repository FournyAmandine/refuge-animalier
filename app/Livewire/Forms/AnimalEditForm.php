<?php

namespace App\Livewire\Forms;

use App\Enum\AnimalStatus;
use App\Jobs\ProcessUploadedImage;
use App\Models\Animal;
use Illuminate\Support\Facades\Storage;
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

    #[Validate('nullable|string')]
    public $img_path = 'assets/img/icones/profil_animal.svg';

    #[Validate('nullable|image')]
    public $photo;

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

        $img_path = $this->img_path;


        if ($this->photo) {
            $new_original_file_name = uniqid() . '.' . config('animals.extension');
            $full_path_to_original = Storage::putFileAs(config('animals.original_path'),
                $this->photo,
                $new_original_file_name,
            );

            if ($full_path_to_original) {
                $img_path = $new_original_file_name;

                ProcessUploadedImage::dispatch($full_path_to_original, $new_original_file_name);
            } else {
                $this->photo = '';
            }
        }

        return Animal::create(
            array_merge(
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
                ]),
                ['img_path' => $img_path]
            )
        );
    }

    public function update()
    {
        $this->validate();

        $img_path = $this->img_path;

        if ($this->photo) {
            $new_original_file_name = uniqid() . '.' . config('animals.extension');
            $full_path_to_original = Storage::putFileAs(config('animals.original_path'),
                $this->photo,
                $new_original_file_name,
            );

            if ($full_path_to_original) {
                $img_path = $new_original_file_name;

                ProcessUploadedImage::dispatch($full_path_to_original, $new_original_file_name);
            } else {
                $this->photo = '';
            }
        }

        $this->animal->update(
            array_merge(
                $this->only([
                    'name',
                    'sexe',
                    'birth_date',
                    'type',
                    'vaccines',
                    'race',
                    'state',
                    'coat',
                    'description',
                ]),
                ['img_path' => $img_path]
            )
        );
    }
}
