<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('halls')->insert([[
            'name' => 'A1',
            'building' => 'Corp A',
            'no_seats' => random_int(30,120),
            'slug' => 'corp-a-a-1'
        ],
            [
                'name' => 'A2',
                'building' => 'Corp A',
                'no_seats' => random_int(30,120),
                'slug' => 'corp-a-a-2'
            ],
            [
                'name' => 'A3',
                'building' => 'Corp A',
                'no_seats' => random_int(30,120),
                'slug' => 'corp-a-a-3'
            ],
            [
                'name' => 'A4',
                'building' => 'Corp A',
                'no_seats' => random_int(30,120),
                'slug' => 'corp-a-a-4'
            ],
            [
                'name' => 'A5',
                'building' => 'Corp A',
                'no_seats' => random_int(30,120),
                'slug' => 'corp-a-a-5'
            ],
            [
                'name' => 'A6',
                'building' => 'Corp C',
                'no_seats' => random_int(30,120),
                'slug' => 'corp-c-a-6'
            ],
            [
                'name' => 'A7',
                'building' => 'Corp B',
                'no_seats' => random_int(30,120),
                'slug' => 'corp-b-a-7'
            ],
            [
                'name' => 'A8',
                'building' => 'Corp B',
                'no_seats' => random_int(30,120),
                'slug' => 'corp-b-a-8'
            ],
            [
                'name' => 'A9',
                'building' => '',
                'no_seats' => random_int(100,220),
                'slug' => 'a-9'
            ],
            [
                'name' => 'A10',
                'building' => 'Corp A',
                'no_seats' => random_int(30,120),
                'slug' => 'corp-a-a-10'
            ]]);
    }
}
