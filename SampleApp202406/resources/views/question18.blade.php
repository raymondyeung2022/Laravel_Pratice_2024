@extends('adminlte::page')

@section('title', '問題18')

@include('parts.common')

@section('content_header')
    <h1>問題18</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>モデル作成</h4>
        <h5><strong>注意: 必ず問題17を回答してからやってください</strong></h5>
        <p>マイグレーションファイル作成とマイグレーションを実行後、各テーブルのモデルクラスを作成してください。<br/>
        既存モデルクラスに参考しても大丈夫です。<br/>
        リレーションがあれば作ってください。(ネット上でよくリレーションの作成方法とDB定義書を確かめてください)
        </p>
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
