<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'post_title' => Str::random(30),
            'post_desc' => Str::random(100),
            'username' => Str::random(10),
        ]);
    }
}
