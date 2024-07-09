<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            "tag_name" => "本"
        ]);

        Tag::create([
            "tag_name" => "プログラミング"
        ]);

        Tag::create([
            "tag_name" => "Laravel"
        ]);

        Tag::create([
            "tag_name" => "ハードウェア"
        ]);

        Tag::create([
            "tag_name" => "ディスプレイカード"
        ]);

        Tag::create([
            "tag_name" => "ソフトウェア"
        ]);

        Tag::create([
            "tag_name" => "Microsoft"
        ]);

        Tag::create([
            "tag_name" => "Office"
        ]);

        Tag::create([
            "tag_name" => "掃除"
        ]);

        Tag::create([
            "tag_name" => "ゲーム"
        ]);
    }
}
