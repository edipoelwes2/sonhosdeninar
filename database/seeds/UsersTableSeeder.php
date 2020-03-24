<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'           => 'Edipo Elwes',
                'email'          => 'teste@gmail.com',
                'phone'          => '(86) 99909-7714',
                'password'       => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
