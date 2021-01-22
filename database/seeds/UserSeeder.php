<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//hash is used to encrpt the password
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Ai',
        	'email'=>'ali@gmail.com',
        	'password'=>Hash::make('121472')
        ]);
    }
}
