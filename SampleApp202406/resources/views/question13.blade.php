@extends('adminlte::page')

@section('title', '問題13')

@include('parts.common')

@section('content_header')
    <h1>問題13</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>データベースから取得データの表示</h4>
        <p>部署プルダウンリストはハードコードで表示していますが、<br/>
        データベースから取得するオブジェクト「$departments」を利用して、各項目を表示するように変更してください<br/>
        なお、各オプションの「value」に部署IDを入れ替えてください。<br/>
        ヒント: 「${オブジェクト名}->id」で部署IDを取得できます</p>
        <p>変更するべきファイル: SampleApp202406\resources\views\question13.blade.php</p>
    </div>

    <div>
        <div class="row">
            <div class="col-2">部署</div>
            <div class="col-4">
                {{-- TODO: $departments中身全てのデータを表示する --}}
                {{-- ヒント: 「${オブジェクト名}->id」で部署IDを取得できます --}}
                <select class="form-control" name="department_id" id="department_id">
                    <option value="1">人事部</option>
                    <option value="2">営業部</option>
                    <option value="3">開発部</option>
                </select>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
