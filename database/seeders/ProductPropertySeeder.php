<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ProductPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakeItems = [
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
        ];

        for ($i = 6; $i < 206; $i++) {
            $propertyId = rand(1, 3);

            switch ($propertyId) {
                case 1:
                    $value = Arr::random(['Red', 'Black', 'White']);
                    break;
                case 2:
                    $value = Arr::random(['Samsuga', 'Banana']);
                    break;
                case 3:
                    $value = Arr::random(['Small', 'Medium', 'Big']);
                    break;
            }

            $fakeItems[] = [
                'product_id' => $i,
                'property_id' => $propertyId,
                'value' => $value,
            ];
        }

        DB::table('product_properties')->insert($fakeItems);
    }
}
