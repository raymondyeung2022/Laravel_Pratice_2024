@extends('adminlte::page')

@section('title', '問題28')

@include('parts.common')

@section('content_header')
    <h1>問題28</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>CSV出力練習</h4>
        <p><strong>*必ず17問目と18問目を回答し、その後seederを導入してから回答お願いします！<br/>(17問目に関するテーブルのseederファイルを既に用意しています)<br/>
        注意: 2024-06-28にordersテーブルのコラム名: 「devliery_code」を「delivery_code」に修正しました。この日の前に17問目を回答した方は、「php artisan migrate:refresh --seed」でマイグレーションをやり直してください<br/>
        マイグレーションやり直しが上手く行けない場合は、データベース「sample_app_202406」を再作成してからマイグレーションを実行してください。
        </strong></p>
        <p>
        下にサンプルCSVファイルがあります。このCSVファイル内容のように、CSV出力機能を実装してください。
        </p>
        <p><a href="files/customers_20240718054403.csv">サンプルCSVファイル</a></p>
        <p><strong>ヒント:<br/>
        1. SampleApp202406/app/Http/Controllers/CustomerController.php<br/>
        各項目のヘッダーを用意しています。このヘッダー順で出力してください。<br/>
        2. SampleApp202406/app/Services/CustomerService.php<br/>
        上記のファイルでEloquentを用意しています。ヘッダー順と合わせていますので、順番を変更しないでください。<br/>
        3. ライブラリの使用はご自由です。使用しなくても構いません。<br/>
        変更するべきファイル:<br/>
        ・SampleApp202406/app/Http/Controllers/CustomerController.php</strong></p>

        <form action="/question28-output-csv" method="POST">
            @csrf
            <input type="submit" class="btn btn-primary" value="CSV出力" />
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
