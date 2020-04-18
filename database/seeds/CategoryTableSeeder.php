<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Fraldas', 'description' => 'Fraldas Descartaveis', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lenços', 'description' => 'Lenços Umidecidos', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
