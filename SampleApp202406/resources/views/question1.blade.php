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

@section('title', '問題1')

@include('parts.common')

@section('content_header')
    <h1>問題1</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>   
    <hr/>

    <div>
        <h4>表示内容変更</h4>
        <p>以下の項目の表示を変更してください</p>
        <ul>
            <ol>生年月日の表示フォーマットを「YYYY-mm-dd」から「YYYY/mm/dd」に変更する</ol>
            <ol>性別に「1」を「男」、「2」を「女」に変更する</ol>
            <ol>ステータスに「1」を「有効」、「0」を「無効」に変更する</ol>
        </ul>
        <p>変更するべきファイル: SampleApp202406\resources\views\question1.blade.php</p>
        <x-adminlte-datatable id="staff_list_table" :heads="$heads" :config="$configs" class="bg-white border border-3 ">
        @foreach ($staff_list as $staff)
            <tr>
                {{-- 職員ID --}}
                <td class="text-left">{{$staff->id}}</td>
                {{-- 職員名 --}}
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
         @endforeach
        </x-adminlte-datatable>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
