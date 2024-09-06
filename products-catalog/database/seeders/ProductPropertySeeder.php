<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_properties')->insert([
            [
                'product_id' => 1,
                'property_id' => 1,
                'value' => 'White',
            ],
            [
                'product_id' => 3,
                'property_id' => 1,
                'value' => 'Black',
            ],
            [
                'product_id' => 5,
                'property_id' => 1,
                'value' => 'Red',
            ],
            [
                'product_id' => 3,
                'property_id' => 2,
                'value' => 'Samsuga',
            ],
            [
                'product_id' => 4,
                'property_id' => 2,
                'value' => 'Banana',
            ],
            [
                'product_id' => 2,
                'property_id' => 3,
                'value' => 'Small',
            ],
            [
                'product_id' => 3,
                'property_id' => 3,
                'value' => 'Medium',
            ],
            [
                'product_id' => 5,
                'property_id' => 3,
                'value' => 'Big',
            ],
        ]);
    }
}
