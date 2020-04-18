<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['name' => 'Anjinhos', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MamyPoko', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Huggies', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pampers', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Babysec', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pompom', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cremer', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LooneyTunes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ScoobyDoo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hipopo', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
