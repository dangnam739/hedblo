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
            'title' => Str::random(10),
            'content' => Str::random(50),
            'date_create' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => Str::random(10),
            'content' => Str::random(50),
            'date_create' => date('Y-m-d H:i:s'),
        ]);
    }
}
