<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'user_name' => 'test1',
            'password' => Hash::make('123456'),
            'gender' => 'male',
            'birthday' => date('Y-m-d H:i:s',mt_rand(1, 2147385600)),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '0123456789',
            'address' => Str::random(20),
            'job' => Str::random(10),
            'avatar_url' => asset('personal-user-illustration-@2x.png'),
        ]);
        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'user_name' => 'test2',
            'password' => Hash::make('123456'),
            'gender' => 'female',
            'birthday' => date('Y-m-d H:i:s',mt_rand(1, 2147385600)),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '0123456789',
            'address' => Str::random(20),
            'job' => Str::random(10),
            'avatar_url' => asset('personal-user-illustration-@2x.png'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Thanh',
            'last_name' => 'Nguyen',
            'user_name' => 'admin ',
            'password' => Hash::make('123456'),
            'gender' => 'female',
            'birthday' => date('Y-m-d H:i:s',mt_rand(1, 2147385600)),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '0123456789',
            'address' => Str::random(20),
            'job' => Str::random(10),
            'avatar_url' => asset('personal-user-illustration-@2x.png'),
        ]);
    }
}
