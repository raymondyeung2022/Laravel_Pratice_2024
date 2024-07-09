<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "category_name" => "本"
        ]);

        Category::create([
            "category_name" => "ハードウェア"
        ]);

        Category::create([
            "category_name" => "ソフトウェア"
        ]);

        Category::create([
            "category_name" => "その他"
        ]);
    }
}
