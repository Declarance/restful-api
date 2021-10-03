<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            [
                'name' => 'Patrick Dempsey',
            ],
            [
                'name' => 'Ben Schnetzer',
            ],
            [
                'name' => 'Damon Wayans Jr.',
            ],
            [
                'name' => 'Caroline Dhavernas',
            ],
            [
                'name' => 'Jay Ryan',
            ],
            [
                'name' => 'Richard Short',
            ],
            [
                'name' => 'Emilia Clarke',
            ],
            [
                'name' => 'Peter Dinklage',
            ],
            [
                'name' => 'Kit Harington',
            ],
        ]);
    }
}
