<?php

namespace App\Livewire\Forms;

use App\Jobs\ProcessUploadedImage;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserEditForm extends Form
{
    public ?User $user;

    #[Validate('required|string')]
    public $name = '';

    #[Validate('required|string')]
    public $email = '';

    #[Validate('required|string')]
    public $password = '';

    #[Validate('string')]
    public $profil_picture = 'assets/img/icones/user_profil.svg';

    #[Validate('nullable|image')]
    public $photo;


    public function setUser(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->profil_picture = $user->profil_picture;
    }


    public function store()
    {
        $this->validate();

        $profil_picture = $this->profil_picture;


        if ($this->photo) {
            $new_original_file_name = uniqid() . '.' . config('users.extension');
            $full_path_to_original = Storage::putFileAs(config('users.original_path'),
                $this->photo,
                $new_original_file_name,
            );

            if ($full_path_to_original) {
                $profil_picture = $new_original_file_name;

                ProcessUploadedImage::dispatch($full_path_to_original, $new_original_file_name);
            } else {
                $this->photo = '';
            }
        }

        return User::create(
            array_merge(
                $this->only([
                    'name',
                    'email',
                    'password',
                    'profil_picture'
                ]),
                ['profil_picture' => $profil_picture]
            )
        );
    }

    public function update()
    {
        $this->validate();

        $profil_picture = $this->profil_picture;

        if ($this->photo) {
            $new_original_file_name = uniqid() . '.' . config('users.extension');
            $full_path_to_original = Storage::putFileAs(config('users.original_path'),
                $this->photo,
                $new_original_file_name,
            );

            if ($full_path_to_original) {
                $profil_picture = $new_original_file_name;

                ProcessUploadedImage::dispatch($full_path_to_original, $new_original_file_name);
            } else {
                $this->photo = '';
            }
        }

        $this->animal->update(
            array_merge(
                $this->only([
                    'name',
                    'email',
                    'password',
                    'profil_picture'
                ]),
                ['profil_picture' => $profil_picture]
            )
        );
    }
}
