<?php

$configs = [
    "paging" => false,
    "searching" => false,
    "ordering" => false
];

$heads = [
    ['label' => '部署', 'no-export' => true,],
    ['label' => "人数", 'no-export' => true,],
];

?>

@extends('adminlte::page')

@section('title', '問題14')

@include('parts.common')

@section('content_header')
    <h1>問題14</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>合計の表示</h4>
        <p>以下のテーブル「合計」コラムに対するデータはハードコードで表示しています。</p>
        <p>データベースで「人事部」、「営業部」と「開発部」それぞれの合計人数を取得して、<br/>
        ハードコードしているところを入れ替えて表示するように変更してください</p>
        <p>変更するべきファイル:<br/>
        1. SampleApp202406\resources\views\question14.blade.php<br/>
        2. SampleApp202406\app\Http\Controllers\StaffListController.php<br/>
        3. SampleApp202406\app\Services\StaffListService.php<br/></p>
    </div>

    <div>
        <x-adminlte-datatable id="staff_list_table" :heads="$heads" :config="$configs" class="bg-white border border-3 ">
            <tr>
                <td class="text-left">人事部</td>
                {{-- TODO: データベースから取得する人事部人数を表示するように変更する --}}
                <td class="text-left">2</td>
            </tr>
            <tr>
                <td class="text-left">営業部</td>
                {{-- TODO: データベースから取得する営業部人数を表示するように変更する --}}
                <td class="text-left">2</td>
            </tr>
            <tr>
                <td class="text-left">開発部</td>
                {{-- TODO: データベースから取得する開発部人数を表示するように変更する --}}
                <td class="text-left">3</td>
            </tr>
        </x-adminlte-datatable>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
