<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\publicacionSeeder;
use Database\Seeders\publicaciones2Seeder;

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
        $this->call(publicacionSeeder::class);
        $this->call(publicaciones2Seeder::class);
    }
}
