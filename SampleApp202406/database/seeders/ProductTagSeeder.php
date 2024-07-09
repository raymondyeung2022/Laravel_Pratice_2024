<?php

namespace Database\Seeders;

use App\Models\ProductTag;
use Illuminate\Database\Seeder;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductTag::create([
            "product_id" => 1,
            "tag_id" => 1,
        ]);

        ProductTag::create([
            "product_id" => 1,
            "tag_id" => 2,
        ]);

        ProductTag::create([
            "product_id" => 1,
            "tag_id" => 3,
        ]);

        ProductTag::create([
            "product_id" => 2,
            "tag_id" => 1,
        ]);

        ProductTag::create([
            "product_id" => 2,
            "tag_id" => 2,
        ]);

        ProductTag::create([
            "product_id" => 2,
            "tag_id" => 3,
        ]);

        ProductTag::create([
            "product_id" => 3,
            "tag_id" => 4,
        ]);

        ProductTag::create([
            "product_id" => 3,
            "tag_id" => 5,
        ]);

        ProductTag::create([
            "product_id" => 4,
            "tag_id" => 6,
        ]);

        ProductTag::create([
            "product_id" => 4,
            "tag_id" => 7,
        ]);

        ProductTag::create([
            "product_id" => 4,
            "tag_id" => 8,
        ]);

        ProductTag::create([
            "product_id" => 5,
            "tag_id" => 9,
        ]);

        ProductTag::create([
            "product_id" => 6,
            "tag_id" => 10,
        ]);
    }
}
