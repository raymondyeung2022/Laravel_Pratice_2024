<?php

$configs = [
    "paging" => false,
    "searching" => false,
    "ordering" => false
];

$heads = [
    ['label' => '職員ID', 'no-export' => true,],
    ['label' => "職員名", 'no-export' => true,],
    ['label' => '生年月日', 'no-export' => true,],
    ['label' => '性別', 'no-export' => true,],
    ['label' => 'メールアドレス', 'no-export' => true,],
    ['label' => 'ステータス', 'no-export' => true,],
];
        
?>

@extends('adminlte::page')

@section('title', '問題4')

@include('parts.common')

@section('content_header')
    <h1>問題4</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>
    
    <div>
        <h4>javascriptのポップアップ練習</h4>
        <p>1. 41行目、59行目と63行目の指示を従ってください</p>
        <p>2. &#64;section('js')のところに、javascriptでポップアップを出して元素countの数字を表示してください<br/>
            表示する文言: 「count: {職員数}」<br/>
            例: 「count: 10」
        </p>
        <p>変更するべきファイル: SampleApp202406\resources\views\question4.blade.php</p>
        <x-adminlte-datatable id="staff_list_table" :heads="$heads" :config="$configs" class="bg-white border border-3 ">
        @php
            // TODO: 変数「$count」を「0」で宣言する
        @endphp
        @foreach ($staff_list as $staff)
            <tr>
                {{-- 職員ID --}}
                <td class="text-left">{{$staff->id}}</td>
                {{-- 職員名前 --}}
                <td class="text-left">{{$staff->staff_name}}</td>
                {{-- 生年月日 --}}
                <td class="text-left">{{$staff->birth_date}}</td>
                {{-- 性別 --}}
                <td class="text-left">{{$staff->sex}}</td>
                {{-- メールアドレス --}}
                <td class="text-left">{{$staff->email}}</td>
                {{-- ステータス --}}
                <td class="text-left">{{$staff->status}}</td>
            </tr>
            @php
                // TODO: 変数「$count」を「1」で足す
            @endphp
         @endforeach
        </x-adminlte-datatable>
        <!-- TODO: valueのところに変数「$count」を指定する -->
        <input type="hidden" name="count" id="count" value="" />
    </div>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
        // TODO: javascriptでポップアップを出して元素countの数字を表示してください
        // 表示する文言: 「count: {職員数}」
        // 例: 「count: 10」
        // ヒント: document.getElementByIdまたは$("#{元素名}")でも可
    </script>
@stop
