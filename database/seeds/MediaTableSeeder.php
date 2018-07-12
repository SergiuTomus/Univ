<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([[
           'path' => 'a1.jpg',
            'type' => 'halls',
            'entity_id' => 1
        ],
            [
                'path' =>'a2.jpg',
                'type' => 'halls',
                'entity_id' => 2
            ],
            [
                'path' =>'a3.jpg',
                'type' => 'halls',
                'entity_id' => 3
            ],
            [
                'path' =>'a4.jpg',
                'type' => 'halls',
                'entity_id' => 4
            ],
            [
                'path' =>'a5.jpg',
                'type' => 'halls',
                'entity_id' => 5
            ],
            [
                'path' =>'a6.jpg',
                'type' => 'halls',
                'entity_id' => 6
            ],
            [
                'path' =>'a7.jpg',
                'type' => 'halls',
                'entity_id' => 7
            ],
            [
                'path' =>'a8.jpg',
                'type' => 'halls',
                'entity_id' => 8
            ],
            [
                'path' =>'a9.jpg',
                'type' => 'halls',
                'entity_id' => 9
            ],
            [
                'path' =>'a10.jpg',
                'type' => 'halls',
                'entity_id' => 10
            ],
            [
                'path' =>'prof1.jpg',
                'type' => 'teachers',
                'entity_id' => 1
            ],
            [
                'path' =>'prof3.jpg',
                'type' => 'teachers',
                'entity_id' => 2
            ],
            [
                'path' =>'prof4.jpg',
                'type' => 'teachers',
                'entity_id' => 3
            ],
            [
                'path' =>'prof5.jpg',
                'type' => 'teachers',
                'entity_id' => 4
            ],
            [   'path' =>'1.jpg',
                'type' => 'faculties',
                'entity_id' => 1
            ],
            [
                'path' =>'2.jpg',
                'type' => 'faculties',
                'entity_id' => 2
            ],
            [
                'path' =>'3.jpg',
                'type' => 'faculties',
                'entity_id' => 3
            ],
            [
                'path' =>'4.jpg',
                'type' => 'faculties',
                'entity_id' => 4
            ],
            [
                'path' =>'5.jpg',
                'type' => 'faculties',
                'entity_id' => 5
            ]]);
    }
}
