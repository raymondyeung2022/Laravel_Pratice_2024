<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            "customer_id" => 1,
            "order_date" => "2024-04-28",
            "delivery_postcode" => "101-0041",
            "delivery_address" => "神田須田町",
            "order_status_id" => 4,
        ]);

        Order::create([
            "customer_id" => 1,
            "order_date" => "2024-04-28",
            "delivery_postcode" => "101-0041",
            "delivery_address" => "神田須田町",
            "order_status_id" => 5,
        ]);

        Order::create([
            "customer_id" => 2,
            "order_date" => "2024-06-02",
            "delivery_postcode" => "136-0071",
            "delivery_address" => "亀戸五丁目",
            "order_status_id" => 4,
        ]);

        Order::create([
            "customer_id" => 2,
            "order_date" => "2024-06-24",
            "delivery_postcode" => "136-0071",
            "delivery_address" => "亀戸五丁目",
            "order_status_id" => 2,
        ]);

        Order::create([
            "customer_id" => 2,
            "order_date" => "2024-06-28",
            "delivery_postcode" => "136-0071",
            "delivery_address" => "亀戸五丁目",
            "order_status_id" => 1,
        ]);
    }
}
