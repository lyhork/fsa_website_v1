<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'lyhorklim',
                'email'=>'lyhorklim@fsa.gov.kh',
                'password' => bcrypt('123456')
            ],
            [
                'name'=>'FSA',
                'email'=>'admin@fsa.gov.kh',
                'password' => bcrypt('123456')
            ],
        ]);
    }
}
