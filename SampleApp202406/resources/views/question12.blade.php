@extends('adminlte::page')

@section('title', '問題12')

@include('parts.common')

@section('content_header')
    <h1>問題12</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>フォーム入力項目確認</h4>
        <p>1. 「保存ボタン」を押す時、javascriptで以下の項目の入力を確認して、<br/>
        空文字列の場合はポップアップで「{項目名}を入力してください」するように実装してください:<br/>
        ・職員名<br/>
        ・性別<br/>
        ・生年月日<br/>
        ・メールアドレス<br/>
        例: 「職員名を入力してください」
        </p>
        <p>2. 入力するメールアドレスのフォーマットが正しいかどうか、javascriptでチェックするように実装してください。<br/>
        フォーマットが正しくない場合はポップアップで「正しいメールアドレスを入力してください」を表示します</p>
        <p>3. 上記の2点通過になったらポップアップで「確認完了」を表示するように実装してください
        <p>変更するべきファイル: SampleApp202406\resources\views\question12.blade.php</p>
    </div>

    <div>
        <form name="staff_create" id="staff_create">
            <div class="form_group">
                <div class="row">
                    <div class="col-2">職員名</div>
                    <div class="col-4">
                        <input type="text" class="form-control" name="staff_name" id="staff_name" />
                    </div>
                </div>
            </div>

            <div>&nbsp;</div>

            <div class="form_group">
                <div class="row">
                    <div class="col-2">部署</div>
                    <div class="col-4">
                        <select class="form-control" name="department_id" id="department_id">
                            <option value="1">人事部</option>
                            <option value="2">営業部</option>
                            <option value="3">開発部</option>
                        </select>
                    </div>
                </div>
            </div>

            <div>&nbsp;</div>

            <div class="form_group">
                <div class="row">
                    <div class="col-2">生年月日</div>
                    <div class="col-4">
                        <input type="date" class="form-control" name="birth_date" id="birth_date" />
                    </div>
                </div>
            </div>

            <div>&nbsp;</div>

            <div class="form_group">
                <div class="row">
                    <div class="col-2">メールアドレス</div>
                    <div class="col-4">
                        <input type="text" class="form-control" name="email" id="email" />
                    </div>
                </div>
            </div>

            <div>&nbsp;</div>

            <div class="form_group">
                <div class="row">
                    <div class="col-2">自己紹介</div>
                    <div class="col-4">
                        <textarea cols="80" rows="5" name="self_intro" id="self_intro"></textarea>
                    </div>
                </div>
            </div>

            <div>&nbsp;</div>

            <div class="form_group">
                <div class="row">
                    <div class="col-2">ステータス</div>
                    <div class="col-4">
                        <select class="form-control" name="status" id="status">
                            <option value="1">有効</option>
                            <option value="0">無効</option>
                        </select>
                    </div>
                </div>
            </div>

            <div>&nbsp;</div>

            <div class="row">
                <div class="col-1">
                    <button class="btn btn-primary" name="btn_submit" id="btn_submit" onclick="SubmitForm();">保存</button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
        function SubmitForm()
        {
            /* 
            TODO:
            1. 以下の項目の入力を確認して、空文字列の場合はポップアップで「{項目名}を入力してください」するように実装する:
            ・職員名
            ・性別
            ・生年月日
            ・メールアドレス
            例: 「職員名を入力してください」
            注意点: まず「document.getElementById」関数で項目の値を取得する

            2. 入力するメールアドレスのフォーマットをチェックする
            正しくない場合はポップアップで「正しいメールアドレスを入力してください」を表示する

            3. 上記の2点通過になったらポップアップで「確認完了」と表示する
            ヒント: 確認フラグ変数を作ることが必要です
            */
        }
    </script>
@stop
