<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => "First title",
            'content' => "First content",
            'description' => "First desc",
            'date_create' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => "Second title",
            'content' => "Second content",
            'description' => "Second desc",
            'date_create' => date('Y-m-d H:i:s'),
        ]);
    }
}
