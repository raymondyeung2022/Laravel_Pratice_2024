<?php
// TODO: json_encode関数を使って、$staff_detailの中身をJSONフォーマットとして整形する
?>

@extends('adminlte::page')

@section('title', '問題20')

@include('parts.common')

@section('content_header')
    <h1>問題20</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>ブラウザのコンソールにJSONフォーマットデータを出力練習</h4>
        <h5><strong>注意: 必ず問題19を回答してからやってください</strong></h5>
        <p>問題19で取得する営業Cのデータを、ブラウザのコンソールに、JSONフォーマットで出力してください。</p>
        <p>*普段デバッグ用の時使います</p>
    </div>
    
    <br/>

    <div>
        サンプルスクリーンショット:<br/>
        <img src="images/KUC_Sample_App_2024061301.png" style="max-width: 600px;" alt="サンプルJSONフォーマット出力" />
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
    <script type="text/javascript">
        $(document).ready(function(){
            // TODO: ページ先頭で定義したJSONフォーマット変数をブラウザコンソールに出力する
            // ヒント: javascriptでPHP変数を受け渡し方法を調べてみてください
        });
    </script>
@stop
