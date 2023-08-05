<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CupboardItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cupboard_item_types')->insert([
            'cupboard_item_type' => 'Grains and Cereals',
        ]);

        DB::table('cupboard_item_types')->insert([
            'cupboard_item_type' => 'Baking Ingredients',
        ]);

        DB::table('cupboard_item_types')->insert([
            'cupboard_item_type' => 'Canned and Jarred Goods',
        ]);

        DB::table('cupboard_item_types')->insert([
            'cupboard_item_type' => 'Nuts, Seeds, and Dried Fruits',
        ]);

        DB::table('cupboard_item_types')->insert([
            'cupboard_item_type' => 'Spices, Seasonings, and Condiments',
        ]);

        DB::table('cupboard_item_types')->insert([
            'cupboard_item_type' => 'Fresh Produce',
        ]);

        DB::table('cupboard_item_types')->insert([
            'cupboard_item_type' => 'Dairy and Dairy Alternatives',
        ]);

        DB::table('cupboard_item_types')->insert([
            'cupboard_item_type' => 'Meat, Poultry, and Seafood',
        ]);

        DB::table('cupboard_item_types')->insert([
            'cupboard_item_type' => 'Eggs and Prepared Foods',
        ]);
    }
}
