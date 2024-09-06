<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Test coin',
                'price' => 100,
                'count' => 30,
            ],
            [
                'name' => 'Test card',
                'price' => 150.5,
                'count' => 20,
            ],
            [
                'name' => 'Test phone',
                'price' => 500,
                'count' => 75,
            ],
            [
                'name' => 'Test notebook',
                'price' => 850.85,
                'count' => 60,
            ],
            [
                'name' => 'Test car',
                'price' => 1500,
                'count' => 10,
            ],
        ]);
    }
}
