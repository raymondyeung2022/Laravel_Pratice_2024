@extends('adminlte::page')

@section('title', '問題16')

@include('parts.common')

@section('content_header')
    <h1>問題16</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>入力フォーム提出問題</h4>
        <p>2つ問題があります:<br/>
        問題1: 保存ボタンを押すと、「The POST method is not supported for route question16. Supported methods: GET, HEAD.」というエラーメッセージを表示されてしまいます。<br/>
        問題2: 問題1を解決してから保存ボタンを押すと、「419 Expired」というエラーメッセージが表示されてしまいます。</p>
        <p>上記の2問を解消出来たら、次に保存ボタンを押すと、白いページで「入力フォーム提出成功！」と「戻る」ハイパーリンクが表示されます。</p>
        <p>変更するべきファイル:<br/>
        1. SampleApp202406\routes\web.php<br/>
        2. SampleApp202406\resources\views\question16.blade.php</p>
    </div>

    <form action="/question16" method="POST">
        <input type="hidden" name="id" id="id" value="1" />

        <div class="row">
            <div class="col-4 pt-2">職員名</div>
            <div class="col-6"><input type="text" class="form-control" name="staff_name" id="staff_name" value="人事A"/></div>
        </div>
        
        <br/>
        
        <div class="row">
            <div class="col-4 pt-2">部署</div>
            <div class="col-6">
                <select class="form-control" name="department_id" id="department_id">
                    <option value="1">人事部</option>
                    <option value="2">営業部</option>
                    <option value="3">開発部</option>
                </select>
            </div>
        </div>
        
        <br/>
        
        <div class="row">
            <div class="col-4 pt-2">性別</div>
            <div class="col-6">
                <select class="form-control" name="department_id" id="department_id">
                    <option value="1">男</option>
                    <option value="2">女</option>
                </select>
            </div>
        </div>
        
        <br/>
        
        <div class="row">
            <div class="col-4 pt-2">メールアドレス</div>
            <div class="col-6"><input type="text" class="form-control" name="email" id="email" value="hr_a@g.dreamcareer.co.jp"/></div>
        </div>
        
        <br/>

        <div class="row">
            <div class="col-1"><input type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-primary" value="保存"/></div>
        </div>
    </form>
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
