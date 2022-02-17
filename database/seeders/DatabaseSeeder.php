<?php

namespace Database\Seeders;

use App\Models\Kerja;
use App\Models\Senarai;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::factory(10)->create();
        // Senarai::factory(10)->create();
        // Kerja::factory(10)->create();

        User::factory(10)
        ->has(Senarai::factory(10)
            ->has(Kerja::factory(10)))
        ->create();
    }
}
