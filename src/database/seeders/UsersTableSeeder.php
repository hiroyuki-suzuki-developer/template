<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'hiroyuki',
                'email' => 'hiroyuki.suzuki.0805@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('Password1?'),
                'remember_token' => NULL,
                'create_datetime' => '2023-08-28 16:47:57',
                'create_user' => NULL,
                'update_datetime' => '2023-08-28 16:47:57',
                'update_user' => NULL,
                'delete_datetime' => NULL,
                'delete_user' => NULL,
                'stripe_id' => NULL,
                'pm_type' => NULL,
                'pm_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
        ));
        
        
    }
}