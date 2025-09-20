<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 100 posts create karte hain
        for ($i = 1; $i <= 100; $i++) {
            $postId = DB::table('posts')->insertGetId([
                'title' => 'Post Title ' . $i,
                'description' => 'This is description for post number ' . $i,
                'author' => 'Author ' . rand(1, 10), // random author 1-10
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Har post ke liye 5-6 comments
            $commentCount = rand(5, 6);
            for ($j = 1; $j <= $commentCount; $j++) {
                DB::table('comments')->insert([
                    'post_id' => $postId,
                    'content' => 'This is comment ' . $j . ' for post ' . $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
