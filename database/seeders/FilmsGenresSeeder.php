<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films_genres')->insert([
            [
                'film_id' => 1,
                'genre_id' => 1,
            ],
            [
                'film_id' => 2,
                'genre_id' => 2,
            ],
            [
                'film_id' => 3,
                'genre_id' => 5,
            ],
        ]);
    }
}
