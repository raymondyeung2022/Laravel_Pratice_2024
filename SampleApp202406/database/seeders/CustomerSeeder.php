<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            "last_name" => "渡辺",
            "first_name" => "花子",
            "last_name_kana" => "ワタナベ",
            "first_name_kana" => "ハナコ",
            "sex" => 2,
            "birth_date" => "1997-08-13",
            "current_postcode" => "101-0041",
            "current_address" => "神田須田町",
            "status" => 1
        ]);
        
        Customer::create([
            "last_name" => "中原",
            "first_name" => "泰朗",
            "last_name_kana" => "ナカハラ",
            "first_name_kana" => "タイロウ",
            "sex" => 1,
            "birth_date" => "1999-11-07",
            "current_postcode" => "136-0071",
            "current_address" => "亀戸五丁目",
            "status" => 1
        ]);
    }
}
