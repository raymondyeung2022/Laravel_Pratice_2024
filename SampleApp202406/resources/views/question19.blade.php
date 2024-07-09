@extends('adminlte::page')

@section('title', '問題19')

@include('parts.common')

@section('content_header')
    <h1>問題19</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>リレーションデータ取得</h4>
        <p>Laravel Eloquentで「営業C」の名前と全てのスキルを取得して、画面上に表示してください。<br/>
        スキルの表示は、スキルIDではなくスキル名でお願いします。</p>
        <p>ヒント:<br/>
        <a href="https://qiita.com/HuntingRathalos/items/5a7cae35a49a2795e8f2/#1-5-条件を追加したい場合" target="_blank">Laravel Eloquentのwithメソッドについて</a>
        <br/>
        上記のURLに参考してから、SampleApp202406\app\Models\Staff.php中の「skills」リレーション関数利用して職員スキルを取得してください。
        <br/>
        *今回はコントローラーで「営業C」を指定しています。
        </p>
        <p>変更するべきファイル:<br/>
        1. SampleApp202406\resources\views\question19.blade.php<br/>
        2. SampleApp202406\app\Services\StaffListService.php
        </p>
    </div>

    <div class="row">
        <div class="col-1"><h5>職員名:</h5></div>
        <div class="col-4">
            {{-- TODO: $staff_skill->staff_nameを表示する --}}
        </div>
    </div>

    <br/>

    <div class="row">
        <div class="col-1"><h5>スキル:</h5></div>
        <div class="col-4">
            {{-- TODO: foreachで$staff_skill->skillsを使って、一行ずつでスキル名(skill_name)を表示する --}}
        </div>
    </div>
    
    <br/>
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
