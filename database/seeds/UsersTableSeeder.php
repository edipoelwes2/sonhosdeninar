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
                'document'       => '03570590348',
                'email'          => 'edipoelwes2@gmail.com',
                'password'       => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
