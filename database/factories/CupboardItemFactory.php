<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CupboardItem>
 */
class CupboardItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->framework,
            'quantity' => rand(0,5),
            'volume' => rand(1,100),
            'quantity_type_id' => rand(1,3),
            'cupboard_id' => rand(1,3),
            'cupboard_item_type_id' => rand(1,9),
            'expires_on' => Carbon::today()->subDays(rand(0, 180)),
        ];
    }
}
