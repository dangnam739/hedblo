<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag_title' => 'Science',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Coding',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Food',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Travel',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Films & Stars',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Weeaboo',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Love',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Code Jav',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Show_biz',
        ]);
    }
}
