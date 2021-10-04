<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            [
                'title' => 'The Truth About the Harry Quebert Affair',
                'genre_id' => 1,
            ],
            [
                'title' => 'Mary Kills People',
                'genre_id' => 2,
            ],
            [
                'title' => 'Game of Thrones',
                'genre_id' => 5,
            ],
        ]);
    }
}
