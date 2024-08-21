<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming articles and users already exist
        $articleIds = DB::table('articles')->pluck('id');
        $userIds = DB::table('users')->pluck('id');

        DB::table('comments')->insert([
            [
                'article_id' => $articleIds->random(), // Randomly assign an existing article
                'user_id' => $userIds->random(), // Randomly assign an existing user
                'comment' => 'This is a comment on an article.'
            ],
            [
                'article_id' => $articleIds->random(), // Randomly assign an existing article
                'user_id' => $userIds->random(), // Randomly assign an existing user
                'comment' => 'This is another comment on a different article.'
            ],
            [
                'article_id' => $articleIds->random(), // Randomly assign an existing article
                'user_id' => $userIds->random(), // Randomly assign an existing user
                'comment' => 'Yet another comment on a third article.'
            ],
        ]);
    }
}
