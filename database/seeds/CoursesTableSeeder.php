<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([[
          'name' => 'Introduction to Python',
            'user_id' => 1
        ],
            [
                'name' => 'Advanced MySQL',
                'user_id' => 1
            ],
            [
                'name' => 'Web Design - Lab',
                'user_id' => 1
            ],
            [
                'name' => 'Introduction to Arts',
                'user_id' => 2
            ],
            [
                'name' => 'Modern art',
                'user_id' => 2
            ],
            [
                'name' => 'Painting - Lab',
                'user_id' => 2
            ]]);
    }
}
