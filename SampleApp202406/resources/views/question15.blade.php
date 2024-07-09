@extends('adminlte::page')

@section('title', '問題15')

@include('parts.common')

@section('content_header')
    <h1>問題15</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>モーダル画面の表示</h4>
        <p>1. 筆アイコンボタンを押す時、モーダル画面を表示するように修正してください<br/>
        2. モーダル画面のキャンセルボタンを押す時、モーダル画面を閉じるように修正してください<br/>
        ヒント: Laravel AdminlteのModalを調べてみてください</p>
        <p>変更するべきファイル: SampleApp202406\resources\views\question15.blade.php</p>
    </div>

    <div>
        <x-adminlte-button id="btn_edit" icon="fas fa-pen" class="edit-button" style="margin:15px 0;" />
    </div>

    <div class="modal fade" id="modalHREdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"
            style="display: flex; flex-direction: column; justify-content: center; min-height: 96vh;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">編集
                        <i class="fas fa-pen" style='font-size:18px; margin-left:5px;'></i>
                    </h5>
                </div>
                <div class="modal-body">
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
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; margin-bottom: 15px;">
                    <x-adminlte-button type="submit"
                        style="width: 32%; border-radius: 100vh; border: none; background-color:#007bff;" class="mb-2"
                        theme="success" label="保存" />
                    <x-adminlte-button type="button"
                        style="width: 32%; border-radius: 100vh; color: #6c757d; border-color: #6c757d; background-color: white;"
                        theme="danger" label="キャンセル" />
                </div>
            </div>
        </div>
    </div>

    <br/>
    
    <div class="row">
        <div class="col-2">職員ID</div>
        <div class="col-4">1</div>
    </div>

    <br/>

    <div class="row">
        <div class="col-2">職員名</div>
        <div class="col-4">人事A</div>
    </div>
    
    <br/>
    
    <div class="row">
        <div class="col-2">部署</div>
        <div class="col-4">人事部</div>
    </div>
    
    <br/>
    
    <div class="row">
        <div class="col-2">性別</div>
        <div class="col-4">男</div>
    </div>
    
    <br/>
    
    <div class="row">
        <div class="col-2">メールアドレス</div>
        <div class="col-4">hr_a@g.dreamcareer.co.jp</div>
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
