<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staffs')->delete();
        
        \DB::table('staffs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'suzuki',
                'email' => 'hiroyuki.suzuki.developer@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('Password1?'),
                'authority' => 0,
                'create_datetime' => '2023-08-28 16:44:28',
                'create_user' => NULL,
                'update_datetime' => '2023-08-28 16:44:28',
                'update_user' => NULL,
                'delete_datetime' => NULL,
                'delete_user' => NULL,
            ),
        ));
        
        
    }
}