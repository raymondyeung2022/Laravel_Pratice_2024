<?php

namespace Database\Seeders;

use App\Models\OrderProduct;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderProduct::create([
            "order_id" => 1,
            "product_id" => 1,
        ]);

        OrderProduct::create([
            "order_id" => 1,
            "product_id" => 2,
        ]);

        OrderProduct::create([
            "order_id" => 2,
            "product_id" => 4,
        ]);

        OrderProduct::create([
            "order_id" => 3,
            "product_id" => 1,
        ]);

        OrderProduct::create([
            "order_id" => 3,
            "product_id" => 3,
        ]);

        OrderProduct::create([
            "order_id" => 3,
            "product_id" => 2,
        ]);
        
        OrderProduct::create([
            "order_id" => 3,
            "product_id" => 5,
        ]);
        
        OrderProduct::create([
            "order_id" => 4,
            "product_id" => 6,
        ]);
        
        OrderProduct::create([
            "order_id" => 5,
            "product_id" => 1,
        ]);
    }
}
