@extends('adminlte::page')

@section('title', '問題17')

@include('parts.common')

@section('content_header')
    <h1>問題17</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>マイグレーションファイル作成</h4>
        <p><a href="https://docs.google.com/spreadsheets/d/1Qfl5rbKn6lknWcaquT2lWzBd0TSj86yxr-JyF9ADmbQ/edit?usp=sharing" target="_blank">問題17用 DB定義書</a><br/>
        上記の定義書に従い、マイグレーションファイルを作成してください。<br/>
        作成が終わったら、動作確認のためマイグレーションを実行してください。<br/>
        <strong>*注意: <br/>
        1. customersテーブルの「sex」と「status」に、マイグレーションファイルでtinyIntgerとして指定しても、長さが必ず「4」になるので、<br/>
        純粋なSQL文で定義しなければなりません。そのため、通常の$table->tinyInteger()ではなく以下のコードで指定してください:<br/>
        DB::statement("ALTER TABLE `customers` ADD `sex` TINYINT(1) NULL DEFAULT 1 COMMENT '性別' AFTER `first_name_kana`");<br/>
        DB::statement("ALTER TABLE `customers` ADD `status` TINYINT(1) NOT NULL DEFAULT 1 COMMENT 'ステータス' AFTER `phone`");<br/>
        あと、「use Illuminate\Support\Facades\DB;」をnamespaceのところに追加する必要があります。<br/>
        2. テーブルの作成順番を注意してください。注意しないとエラーが起こります。ヒントとして、「FK」(外部キー)コラムがあるテーブルは、リレーション先テーブルの後で作成しなければなりません。
        </strong><br/>
        普段COMMENTの部分(コラム名)は作成しなくてもいいですが、練習として作成して頂ければと思います。<br/>
        MySQLコマンドプロンプト(関連ツールは可)で「SHOW CREATE TABLE {テーブル名}」を実行して、以下のスクリーンショットと一致すればOKです
        </p>
        <p><strong>2024-06-28 16:50更新: ordersテーブル配達「お届け郵便番号	」のコラム名を修正しました: devliery_postcode -> delivery_postcode</strong></p>

        <p>categoriesテーブル:<br/>
        <img src="images/KUC_Sample_App_2024061201.png" style="max-width: 600px;" alt="categoriesテーブル" />
        </p>

        <br/>

        <p>productsテーブル:<br/>
        <img src="images/KUC_Sample_App_2024061202.png" style="max-width: 600px;" alt="productsテーブル" />
        </p>

        <br/>

        <p>tagsテーブル:<br/>
        <img src="images/KUC_Sample_App_2024061203.png" style="max-width: 600px;" alt="tagsテーブル" />
        </p>

        <br/>

        <p>product_tagsテーブル:<br/>
        <img src="images/KUC_Sample_App_2024061204.png" style="max-width: 600px;" alt="product_tagsテーブル" />
        </p>

        <br/>

        <p>ordersテーブル:<br/>
        <img src="images/KUC_Sample_App_2024061205.png" style="max-width: 600px;" alt="ordersテーブル" />
        </p>

        <br/>

        <p>order_productsテーブル:<br/>
        <img src="images/KUC_Sample_App_2024061206.png" style="max-width: 600px;" alt="order_productsテーブル" />
        </p>

        <br/>

        <p>order_statusテーブル:<br/>
        <img src="images/KUC_Sample_App_2024061207.png" style="max-width: 600px;" alt="order_statusテーブル" />
        </p>

        <br/>

        <p>customersテーブル:<br/>
        <img src="images/KUC_Sample_App_2024061208.png" style="max-width: 600px;" alt="customersテーブル" />
        </p>

        <br/>
    </div>
@stop

@section('css')
    <style>
        .edit-button {
            padding: 10px;
        }
    </style>
@stop

@section('js')
@stop
