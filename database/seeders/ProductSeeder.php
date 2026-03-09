<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // --- Pain & Fever ---
            ['name' => 'Panadol CF', 'price' => 250, 'stock' => 100, 'min_stock_level' => 20],
            ['name' => 'Brufen 400mg', 'price' => 180, 'stock' => 50, 'min_stock_level' => 10],
            ['name' => 'Disprin (Pack of 10)', 'price' => 50, 'stock' => 200, 'min_stock_level' => 30],

            // --- Protection & Hygiene (The "Protection" part) ---
            ['name' => 'Durex Performa (3s)', 'price' => 650, 'stock' => 150, 'min_stock_level' => 5],
            ['name' => 'Josh Strawberry (3s)', 'price' => 200, 'stock' => 250, 'min_stock_level' => 5],
            ['name' => 'Surgical Face Masks (50pcs)', 'price' => 450, 'stock' => 100, 'min_stock_level' => 5], // Alert trigger
            ['name' => 'Dettol Hand Sanitizer', 'price' => 320, 'stock' => 400, 'min_stock_level' => 8],

            // --- Stomach & Digestion ---
            ['name' => 'Gaviscon Syrup', 'price' => 280, 'stock' => 12, 'min_stock_level' => 5],
            ['name' => 'Flagyl 400mg', 'price' => 120, 'stock' => 80, 'min_stock_level' => 15],
            ['name' => 'Risek 20mg (Omeprazole)', 'price' => 450, 'stock' => 60, 'min_stock_level' => 10],

            // --- Baby & Mother Care ---
            ['name' => 'Pampers Size 4 (Small Pack)', 'price' => 1200, 'stock' => 8, 'min_stock_level' => 5],
            ['name' => 'Johnson Baby Powder', 'price' => 350, 'stock' => 20, 'min_stock_level' => 5],
            ['name' => 'Lactogen 1 (400g)', 'price' => 1850, 'stock' => 5, 'min_stock_level' => 3], // Alert trigger

            // --- First Aid ---
            ['name' => 'Saniplast (Band-aid)', 'price' => 5, 'stock' => 500, 'min_stock_level' => 50],
            ['name' => 'Pyodine Solution', 'price' => 150, 'stock' => 30, 'min_stock_level' => 10],
            ['name' => 'Cotton Roll (Small)', 'price' => 80, 'stock' => 25, 'min_stock_level' => 5],

            // --- General Wellness ---
            ['name' => 'Surbe-Z (Multivitamins)', 'price' => 380, 'stock' => 45, 'min_stock_level' => 10],
            ['name' => 'Cac-1000 Plus', 'price' => 950, 'stock' => 30, 'min_stock_level' => 5],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}