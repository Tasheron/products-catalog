<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            [
                'name' => 'Color',
            ],
            [
                'name' => 'Brand',
            ],
            [
                'name' => 'Size',
            ],
        ]);
    }
}
