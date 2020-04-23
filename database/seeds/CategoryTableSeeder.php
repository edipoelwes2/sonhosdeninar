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
            ['name' => 'Fralda', 'description' => 'Fraldas Descartaveis', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lenço', 'description' => 'Lenços Umidecidos', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Roupa', 'description' => '', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'calçado', 'description' => '', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'higiene/Limpeza', 'description' => '', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
