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
        // reset users table
        DB::table('users')->truncate();

        // insert 3 users
        DB::table('users')->insert([
            [
                'name' => 'Mr. Admin',
                'email' => 'admin@mylibry.com',
                'password'=> bcrypt('secret'),
                'role_id'=> 1,
                'is_active'=> 1
            ],
            [
                'name'=> 'Mr. Editor',
                'email'=> 'editor@mylibry.com',
                'password'=> bcrypt('secret'),
                'role_id'=> 2,
                'is_active'=> 1
            ],
            [
                'name'=> 'Mr. User',
                'email'=> 'user@mylibry.com',
                'password'=> bcrypt('secret'),
                'role_id'=> 3,
                'is_active'=> 1
            ],
        ]);
    }
}
