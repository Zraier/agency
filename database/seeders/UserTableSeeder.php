<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

                //Admin
            [
                'name'=>'slim',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=> Hash::make('111'),
                'role'=> 'admin',
                'status'=>'active',
            ],

          

        ]);

        
        
    }
}
