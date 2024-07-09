<?php

$configs = [
    "paging" => false,
    "searching" => false,
    "ordering" => false
];

$heads = [
    ['label' => '職員ID', 'no-export' => true,],
    ['label' => "職員名", 'no-export' => true,],
    ['label' => "部署名", 'no-export' => true,],
    ['label' => '生年月日', 'no-export' => true,],
    ['label' => '性別', 'no-export' => true,],
    ['label' => 'メールアドレス', 'no-export' => true,],
    ['label' => 'ステータス', 'no-export' => true,],
];
        
?>

@extends('adminlte::page')

@section('title', '問題11')

@include('parts.common')

@section('content_header')
    <h1>問題11</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>データ取得条件と表示修正</h4>
        <p>1. データベースで論理削除されているデータが表示していません。<br/>
        表示するように修正してください
        2. 部署の表示が空の場合は「所属なし」で表示するように変更してください
        </p>
        <p>変更するべきファイル:
        1. SampleApp202406\app\Services\StaffListService.php<br/>
        2. SampleApp202406\resources\views\question11.blade.php</p>
        <x-adminlte-datatable id="staff_list_table" :heads="$heads" :config="$configs" class="bg-white border border-3 ">
        @foreach ($staff_list as $staff)
            <tr>
                {{-- 職員ID --}}
                <td class="text-left">{{$staff->id}}</td>
                {{-- 職員名 --}}
                <td class="text-left">{{$staff->staff_name}}</td>
                {{-- 部署名 --}}
                {{-- TODO: 空の場合は「所属なし」で表示するように変更する --}}
                <td class="text-left">{{$staff->department_name}}</td>
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
