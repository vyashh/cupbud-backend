<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cupboard;
use App\Models\CupboardItem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call([
            CupboardItemTypeSeeder::class,
            QuantityTypeSeeder::class,
        ]);
        
        User::factory()->count(3)->has(Cupboard::factory())->create();
        CupboardItem::factory()->count(100)->create();




    }
}
