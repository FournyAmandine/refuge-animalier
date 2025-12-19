<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Availability;
use App\Models\Message;
use App\Models\Task;
use App\Models\User;
use App\Models\Volunteer;
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
        Animal::factory(30)->create();

        Volunteer::factory(10)->create();

        Availability::factory(10)->create();

        Task::factory(10)->create();

        Message::factory(10)->create();
    }
}
