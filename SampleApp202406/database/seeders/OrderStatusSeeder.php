<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderStatus::create([
            "status_name" => "注文受付中" 
        ]);

        OrderStatus::create([
            "status_name" => "処理中" 
        ]);

        OrderStatus::create([
            "status_name" => "発送中" 
        ]);

        OrderStatus::create([
            "status_name" => "配達完了" 
        ]);

        OrderStatus::create([
            "status_name" => "キャンセル" 
        ]);
    }
}
