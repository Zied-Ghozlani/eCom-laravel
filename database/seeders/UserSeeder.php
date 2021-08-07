<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Import the dataBase file
use Illuminate\Support\Facades\Hash;  //Hash is used to encrypt the pwd
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'aya laarif',
            'email'=>'aya@laarif.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
