<?php

namespace App\Faker;
use Faker\Provider\base;

class FrameworkProvider extends Base
{
    protected static $names = [
        "Pasta",
        "White rice",
        "Rolled oats",
        "Cornflakes cereal",
        "All-purpose flour",
        "Granulated sugar",
        "Baking powder",
        "Cocoa powder",
        "Canned corn",
        "Canned peaches",
        "Canned black beans",
        "Canned tomato soup",
        "Tomato sauce",
        "Dill pickles",
        "Almonds",
        "Chia seeds",
        "Raisins",
        "Salt",
        "Ground black pepper",
        "Cinnamon powder",
        "Italian seasoning",
        "Ketchup",
        "Yellow mustard",
        "Mayonnaise",
        "Soy sauce",
        "Apple cider vinegar",
        "Olive oil",
        "Honey",
        "Maple syrup",
        "Apples",
        "Oranges",
        "Strawberries",
        "Carrots",
        "Lettuce",
        "Broccoli",
        "Fresh parsley",
        "Cow's milk",
        "Unsalted butter",
        "Cheddar cheese",
        "Greek yogurt",
        "Chicken breasts",
        "Ground beef",
        "Bacon strips",
        "Salmon fillets",
        "Shrimp",
        "Chicken eggs",
        "Leftover lasagna",
        "Caesar salad",
        "Hummus"
];
    public function framework(): string
    {
        return static::randomElement(static::$names);
    }
}