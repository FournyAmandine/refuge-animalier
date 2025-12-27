<?php

namespace Database\Seeders;

use App\Enum\UserRole;
use App\Models\Adoption;
use App\Models\Animal;
use App\Models\Availability;
use App\Models\Message;
use App\Models\Notes;
use App\Models\Task;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Prompts\Note;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
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

        Volunteer::factory(10)->create();

        Availability::factory(10)->create();

        Task::factory(10)->create();

        Message::factory(10)->create();

        Adoption::factory(10)->create();

        Notes::factory(30)->create();
    }
}
