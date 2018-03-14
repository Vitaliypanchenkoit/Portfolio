<?php

use Illuminate\Database\Seeder;

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
                'region_id' => 9,
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'password' => '123456',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'phone' => '0661234567',
            ),
            1 =>
            array (
                'id' => 2,
                'region_id' => 9,
                'name' => 'User2',
                'email' => 'user2@gmail.com',
                'password' => '123456',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'phone' => '0501234567',
            ),
            2 =>
            array (
                'id' => 3,
                'region_id' => 3,
                'name' => 'User3',
                'email' => 'user3@gmail.com',
                'password' => '123456',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'phone' => '0501234567',
            ),
            3 =>
            array (
                'id' => 4,
                'region_id' => 2,
                'name' => 'User4',
                'email' => 'user4@gmail.com',
                'password' => '123456',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'phone' => '0501234567',
            ),
            4 =>
            array (
                'id' => 5,
                'region_id' => 3,
                'name' => 'User5',
                'email' => 'user5@gmail.com',
                'password' => '123456',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'phone' => '0501234567',
            ),
        ));


    }
}