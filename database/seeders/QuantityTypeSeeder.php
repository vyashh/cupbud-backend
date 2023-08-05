<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuantityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quantity_types')->insert([
            'quantity_type' => 'milliliters',
            'quantity_type_shorthand' => 'ml',
        ]);

        DB::table('quantity_types')->insert([
            'quantity_type' => 'grams',
            'quantity_type_shorthand' => 'g',
        ]);

        DB::table('quantity_types')->insert([
            'quantity_type' => 'liter',
            'quantity_type_shorthand' => 'l',
        ]);
    }
}
