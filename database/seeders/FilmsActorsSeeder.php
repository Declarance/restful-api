<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films_actors')->insert([
            [
                'actor_id' => 1,
                'film_id' => 1,
            ],
            [
                'actor_id' => 2,
                'film_id' => 1,
            ],
            [
                'actor_id' => 3,
                'film_id' => 1,
            ],
            [
                'actor_id' => 4,
                'film_id' => 2,
            ],
            [
                'actor_id' => 5,
                'film_id' => 2,
            ],
            [
                'actor_id' => 6,
                'film_id' => 2,
            ],
            [
                'actor_id' => 7,
                'film_id' => 3,
            ],
            [
                'actor_id' => 8,
                'film_id' => 3,
            ],
            [
                'actor_id' => 9,
                'film_id' => 3,
            ],
        ]);
    }
}
