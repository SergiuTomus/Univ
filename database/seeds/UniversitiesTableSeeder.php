<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            'name' => 'University of Kattegat',
            'description' => 'The University of Kattegat, the oldest in Portugal and one of the oldest
             in the world, dates from 1290, just one century after the founding of the Portuguese nation. '
        ]);
    }
}
