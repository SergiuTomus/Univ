<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'first_name' => 'Cristina',
            'email' => 'cristina.b@univ.com',
            'password' => bcrypt('123456'),
            'remember_token' => bcrypt('123456'),
            'last_name' => 'Boca',
            'role' => 2,
            'slug' => 'cristina-boca',
            'interest' => 'Computer Science'
        ],
            [
                'first_name' => 'Cristian',
                'email' => 'cristi.p@univ.com',
                'password' => bcrypt('123456'),
                'remember_token' => bcrypt('123456'),
                'last_name' => 'Popescu',
                'role' => 2,
                'slug' => 'cristian-popescu',
                'interest' => 'Arts'
            ],
            [
                'first_name' => 'Adela',
                'email' => 'adela.a@univ.com',
                'password' => bcrypt('123456'),
                'remember_token' => bcrypt('123456'),
                'last_name' => 'Andreea',
                'role' => 3,
                'slug' => 'adela-andreea',
                'interest' => 'Economics'
            ],
            [
                'first_name' => 'Marius',
                'email' => 'marius.v@univ.com',
                'password' => bcrypt('123456'),
                'remember_token' => bcrypt('123456'),
                'last_name' => 'Varciu',
                'role' => 3,
                'slug' => 'marius-varciu',
                'interest' => 'Literature'
            ]]);
    }
}
