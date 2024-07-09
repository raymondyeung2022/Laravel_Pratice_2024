<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "product_name" => "Laravel達人になりましょう",
            "product_description" => "Laravel初心者から上級者まで大歓迎です!",
            "category_id" => 1,
            "price" => 1500
        ]);

        Product::create([
            "product_name" => "Laravel 100個問題集",
            "product_description" => "Laravel実践練習ための問題集です",
            "category_id" => 1,
            "price" => 2000
        ]);

        Product::create([
            "product_name" => "MSI GeForce GTX 1660 SUPER VENTUS XS OC",
            "product_description" => "MSI GeForce GTX 1660 SUPER VENTUS XS OCグラフィックスボード VD7111",
            "category_id" => 2,
            "price" => 19000
        ]);

        Product::create([
            "product_name" => "Office Personal 2021",
            "product_description" => "常に最新の Office アプリや、強固なセキュリティを備えた 1TB のクラウド ストレージの OneDrive、追加費用無しで何度でも利用できるテクニカルサポート、マルチデバイスでのアプリが使用できます。Microsoft 365 Family なら、家族の安全を守るよう設計された Microsoft ファミリー セーフティ アプリのすべての機能を利用いただけます。",
            "category_id" => 3,
            "price" => 37700
        ]);

        Product::create([
            "product_name" => "サンワサプライ(SANWA SUPPLY) 除電ブラシ CD-BR14GYN",
            "product_description" => "キーボードのすき間も綺麗に清掃できる",
            "category_id" => 4,
            "price" => 388
        ]);

        Product::create([
            "product_name" => "Nintendo Switch (有機ELモデル)",
            "product_description" => "画面の縁がスリムになって広がる「7インチ有機ELディスプレイ」、クリアなサウンドを楽しめる新スピーカー、64GBの本体保存メモリーを採用。<br/>見やすい角度で画面を固定する「フリーストップ式」のワイドなスタンドを採用し、付属のドックには、新たに有線LAN端子を搭載。<br/>大画面で楽しむ「TVモード」、画面をシェアする「テーブルモード」、大きい画面を持ち歩く「携帯モード」の3つのプレイモードを備える。",
            "category_id" => 4,
            "price" => 37400
        ]);
    }
}
