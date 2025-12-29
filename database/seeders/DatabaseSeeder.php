<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\Adoption;
use App\Models\Animal;
use App\Models\Availability;
use App\Models\ContactMessage;
use App\Models\Notes;
use App\Models\Task;
use App\Models\User;
use App\Models\Volunteer;
use App\Models\VolunteerMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'email' => 'amandine@fourny.com',
            'name' => 'Amandine Fourny',
            'password' => password_hash('azerty', PASSWORD_BCRYPT),
            'role' => UserRole::Administrator
        ]);

        User::create([
            'email' => 'loic@mozin.com',
            'name' => 'Loïc Mozin',
            'password' => password_hash('12345', PASSWORD_BCRYPT),
            'role' => UserRole::Volunteer
        ]);

        Animal::factory(30)->create();

        Volunteer::factory(10)->for($user)->create();

        Availability::factory(10)->create();

        Task::factory(10)->for($user)->create();

        ContactMessage::factory(10)->for($user)->create();

        VolunteerMessage::factory(10)->for($user)->create();

        Adoption::factory(10)->for($user)->create();

        Notes::factory(30)->create();
    }
}
