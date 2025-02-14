<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 4; $i++) {
            Product::create([
                "code" => "NB#023311",
                "name"=> "New Balance 530 Steel grey",
                "desc"=> "The New Balance 740 is a versatile athletic shoe designed for comfort and support during various activities. Featuring a sleek design, it offers a cushioned midsole for responsive cushioning, making it suitable for running, walking, or casual wear.",
                "quantity"=> 4,
                "price"=> 1.899,00,
            ]);
    }
}
};