<?php

namespace Database\Seeders;

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
        $this->call(FilmSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(FilmsActorsSeeder::class);
        $this->call(FilmsGenresSeeder::class);
    }
}
