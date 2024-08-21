<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Retrieve role IDs
        $adminRoleId = DB::table('roles')->where('role', 'Admin')->first()->id;
        $writerRoleId = DB::table('roles')->where('role', 'Writer')->first()->id;
        $userRoleId = DB::table('roles')->where('role', 'User')->first()->id;

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('password123'), // You can use a more secure password here
                'role_id' => $adminRoleId
            ],
            [
                'username' => 'writer1',
                'email' => 'writer1@test.com',
                'password' => Hash::make('password123'), // You can use a more secure password here
                'role_id' => $writerRoleId
            ],
            [
                'username' => 'writer2',
                'email' => 'writer2@test.com',
                'password' => Hash::make('password123'), // You can use a more secure password here
                'role_id' => $writerRoleId
            ],
            [
                'username' => 'writer3',
                'email' => 'writer3@test.com',
                'password' => Hash::make('password123'), // You can use a more secure password here
                'role_id' => $writerRoleId
            ],
            [
                'username' => 'user',
                'email' => 'user@test.com',
                'password' => Hash::make('password123'), // You can use a more secure password here
                'role_id' => $userRoleId
            ],
        ]);
    }
}
