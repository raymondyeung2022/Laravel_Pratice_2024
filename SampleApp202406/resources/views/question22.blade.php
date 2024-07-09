<?php

$configs = [
    "paging" => false,
    "searching" => false,
    "ordering" => false
];

$heads = [
    ['label' => '職員ID', 'no-export' => true,],
    ['label' => "職員名", 'no-export' => true,],
    ['label' => '自己紹介', 'no-export' => true,],
];
        
?>

@extends('adminlte::page')

@section('title', '問題22')

@include('parts.common')

@section('content_header')
    <h1>問題22</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>表示文字数制限</h4>
        <p>自己紹介に文字数が結構多いデータがあります。<br/>
        CSSで自己紹介コラムに最大の長さを150pxで設定し、文字数が150px以上を超える場合は、「...」で部分の文字だけ表示するように修正してください</p>
        <p>変更するべきファイル: SampleApp202406\resources\views\question22.blade.php</p>
        <x-adminlte-datatable id="staff_list_table" :heads="$heads" :config="$configs" class="bg-white border border-3 ">
        @foreach ($staff_list as $staff)
            <tr>
                {{-- 職員ID --}}
                <td class="text-left">{{$staff->id}}</td>
                {{-- 職員名 --}}
                <td class="text-left">{{$staff->staff_name}}</td>
                {{-- 自己紹介 --}}
                {{-- TODO: 作成したCSSスタイルを適用する --}}
                <td class="text-left">{{$staff->self_intro}}</td>
            </tr>  
         @endforeach
        </x-adminlte-datatable>
    </div>
@stop

@section('css')
    <style>
        .edit-button {
            padding: 10px;
        }
        /*
        TODO: 「自己紹介」コラムに最大幅を150pxで設定して、データの文字数が150pxを超えたら「...」で表示するように
        CSSスタイルを作成して、自己紹介のtdにスタイルを適用する
        */
    </style>
@stop

@section('js')
@stop
