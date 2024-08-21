<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Retrieve user IDs with the role 'Writer'
        $writerRoleId = DB::table('roles')->where('role', 'Writer')->first()->id;
        $writerUserIds = DB::table('users')->where('role_id', $writerRoleId)->pluck('id');

        // Check if there are any writers
        if ($writerUserIds->isEmpty()) {
            return; // Exit if no users with the 'Writer' role exist
        }

        DB::table('articles')->insert([
            [
                'title' => 'First Article',
                'body' => 'This is the body of the first article.',
                'user_id' => $writerUserIds->random() // Randomly assign a 'Writer' user
            ],
            [
                'title' => 'Second Article',
                'body' => 'This is the body of the second article.',
                'user_id' => $writerUserIds->random() // Randomly assign a 'Writer' user
            ],
            [
                'title' => 'Third Article',
                'body' => 'This is the body of the third article.',
                'user_id' => $writerUserIds->random() // Randomly assign a 'Writer' user
            ],
        ]);
    }
}
