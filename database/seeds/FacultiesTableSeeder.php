<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([[
            'name' => 'Economics',
            'description'=>'Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea.',
            'univ_id' => 1,
            'slug' => 'economics'
        ],
            [
                'name' => 'Arts',
                'description'=>'Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea.',
                'univ_id' => 1,
                'slug' => 'arts'
            ],
            [
                'name' => 'Literature',
                'description'=>'Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea.',
                'univ_id' => 1,
                'slug' => 'literature'
            ],
            [
                'name' => 'Law',
                'description'=>'Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea.',
                'univ_id'=>1,
                'slug'=>'law'
            ],
            [
                'name'=>'Medicine',
                'description'=>'Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea.',
                'univ_id'=>1,
                'slug'=> 'medicine-and-pharmacy'

            ]]);
    }
}
