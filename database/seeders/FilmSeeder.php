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
            ],
            [
                'title' => 'Mary Kills People',
            ],
            [
                'title' => 'Game of Thrones',
            ],
        ]);
    }
}
