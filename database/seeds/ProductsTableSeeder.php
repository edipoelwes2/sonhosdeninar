<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 20 Unidades', 'size' => 'M', 'price' => 29.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 42 Unidades', 'size' => 'M', 'price' => 43.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 62 Unidades', 'size' => 'M', 'price' => 65.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Dia e Noite - Fralda-Calça - 38 Unidades', 'size' => 'M', 'price' => 38.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 50 Unidades', 'size' => 'P', 'price' => 43.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 17 Unidades', 'size' => 'G', 'price' => 29.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 36 Unidades', 'size' => 'G', 'price' => 43.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Dia e Noite - Fralda-Calça - 34 Unidades', 'size' => 'G', 'price' => 38.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Dia e Noite - Fralda-Calça - 30 Unidades', 'size' => 'XG', 'price' => 38.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 32 Unidades', 'size' => 'XG', 'price' => 38.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 15 Unidades', 'size' => 'XG', 'price' => 29.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 28 Unidades', 'size' => 'XXG', 'price' => 43.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 2, 'description' => 'Super Seca - Fralda-Calça - 13 Unidades', 'size' => 'XXG', 'price' => 29.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care - Normal - 18 Unidades', 'size' => 'RN', 'price' => 15.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Soft Touch - Normal - 18 Unidades', 'size' => 'RN', 'price' => 17.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Soft Touch - Normal - 38 Unidades', 'size' => 'RN', 'price' => 24.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Tripla Sec - Normal - 60 Unidades', 'size' => 'P', 'price' => 39.50, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care - Normal - 48 Unidades', 'size' => 'P', 'price' => 32.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care Fashion - Roupinha - 22 Unidades', 'size' => 'M', 'price' => 14.50, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Tripla Sec - Normal - 92 Unidades', 'size' => 'M', 'price' => 58.50, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Tripla Sec - Normal - 54 Unidades', 'size' => 'M', 'price' => 39.50, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care - Normal - 80 Unidades', 'size' => 'M', 'price' => 44.90, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care - Normal - 40 Unidades', 'size' => 'M', 'price' => 32.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care - Roupinha - 36 Unidades', 'size' => 'M', 'price' => 32.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Tripla Sec - Normal - 78 Unidades', 'size' => 'G', 'price' => 58.50, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Tripla Sec - Normal - 48 Unidades', 'size' => 'G', 'price' => 39.50, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care - Normal - 64 Unidades', 'size' => 'G', 'price' => 63.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care - Normal - 32 Unidades', 'size' => 'G', 'price' => 32.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care - Roupinha - 30 Unidades', 'size' => 'G', 'price' => 32.00, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'brand_id' => 3, 'description' => 'Supreme Care - Roupinha - 60 Unidades', 'size' => 'G', 'price' => 60.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
