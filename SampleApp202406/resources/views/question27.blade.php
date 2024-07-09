@extends('adminlte::page')

@section('title', '問題27')

@include('parts.common')

@section('content_header')
    <h1>問題27</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>SQL SELECT文練習2</h4>
        <p><strong>*必ず17問目と18問目を回答し、その後seederを導入してから回答お願いします！<br/>(17問目に関するテーブルのseederファイルを既に用意しています)<br/>
        注意: 2024-06-28にordersテーブルのコラム名: 「devliery_code」を「delivery_code」に修正しました。この日の前に17問目を回答した方は、「php artisan migrate:refresh --seed」でマイグレーションをやり直してください<br/>
        マイグレーションやり直しが上手く行けない場合は、データベース「sample_app_202406」を再作成してからマイグレーションを実行してください。
        </strong></p>
        <p>
        下にスクリーンショットがあります。この結果を出せるようにSQL文を作ってください。<br/>コードにあるidが「sql」のdivの中に記載してもいいです。<br/>
        (同じ行に記載することが長いと感じるなら、改行を付けても構いません)
        </p>
        <p><img src="images/KUC_SampleApp_2024070901.png" alt="目標結果" style="max-width: 800px;" /></p>
        <p>下のスクリーンショットは、各注文と購入する商品名の情報です:</p>
        <p><img src="images/KUC_SampleApp_2024070902.png" alt="各注文と購入する商品名の情報" style="max-width: 800px;" /></p>
        <p><strong>ヒント:<br/>
        1. 関連テーブル: customers, orders, order_products, products<br/>
        2. MySQLのCONCATとCASEについて調べてください。<br/>
        3. 「AS」を使って出力するコラム名をスクリーンショットと一致するように変更してください<br/>
        4. INNER JOINを使う必要があります</strong></p>

        {{-- TODO: 下のdivの中にSELECT文を記載する --}}
        <div id="sql"></div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
