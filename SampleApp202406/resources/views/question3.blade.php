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

@section('title', '問題3')

@include('parts.common')

@section('content_header')
    <h1>問題3</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>表示するデータに条件を設けるその2</h4>
        <p>ステータスが「1」だけ職員リストを表示するするように変更してください</p>
        <p>変更するべきファイル: SampleApp202406\app\Services\StaffListService.php</p>
        <x-adminlte-datatable id="staff_list_table" :heads="$heads" :config="$configs" class="bg-white border border-3 ">
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
         @endforeach
        </x-adminlte-datatable>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
