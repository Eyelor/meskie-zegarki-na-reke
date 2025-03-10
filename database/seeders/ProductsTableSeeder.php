<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usunięcie istniejących danych z tabeli
        Product::truncate();

        // Wypełnienie tabeli nowymi danymi
        Product::create(['product_name' => 'Diesel Mr. Daddy', 'product_price' => 638.00]);
        Product::create(['product_name' => 'Adriatica Multifunction', 'product_price' => 1090.00]);
        Product::create(['product_name' => 'Lorus Chronograph', 'product_price' => 459.00]);
        Product::create(['product_name' => 'G-SHOCK Mudmaster Carbon', 'product_price' => 3799.00]);
        Product::create(['product_name' => 'Daniel Wellington Iconic Motion Silver', 'product_price' => 882.00]);
        Product::create(['product_name' => 'Tommy Hilfiger Daniel', 'product_price' => 497.00]);
    }
}
