@extends('adminlte::page')

@section('title', '問題23')

@include('parts.common')

@section('content_header')
    <h1>問題23</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>FormRequestクラス</h4>
        <p>LaravelのFormRequestクラスを利用して、バリデーションを行いましょう。<br/>
        1. コマンドプロンプトでSampleApp202406フォルダに「php artisan make:request StaffRequest」でFormRequestクラスで作成します。<br/>
        2. コントローラーでquestion23関数に「StaffRequest $staffRequest」でFormRequestクラスから作成するインスタンスを渡します:<br/>
        <strong>function question23(StaffRequest $staffRequest)</strong><br/>
        3. 「SampleApp202406\app\Http\Requests\StaffRequest.php」で:<br/>
        i. authorize関数に「return true;」に変更してください(このクラスへのアクセス権限を与えるため)<br/>
        ii. rules関数に以下の項目に正規表現でルールを設定しましょう:<br/>
        <strong>
            <ul>
                <ol>職員名: 最大文字数255、入力必須</ol>
                <ol>メールアドレス: 正しいメールアドレスフォーマット、入力必須</ol>
                <ol>自己紹介: 最大文字数1000</ol>
            </ul>
        </strong><br/>
        <strong>*CSRFトークンを付けないと、「HTTP 419 EXPIRED」が発生します</strong><br/>
        *FormRequestで正規表現を使えます。今回はチェックする項目に正規表現を使う必要がないので、設定しなくてもいいですが、正規表現について調べておいてください<br/>
        *FormRequestクラスのmessages関数でエラーメッセージ内容を設定できますが、今回は練習なので大丈夫です。設定してみたい方は歓迎です<br/>
        4. 確認として:<br/>
        (1) バリデーション通過できない時以下のスクリーンショットのように、エラーメッセージを表示する出来ればOKです。<br/>
        バリエーション通貨できないケース1:<br/>
        <img src="images/KUC_Sample_App_2024061901.png" alt="バリエーション通貨できないケース1" style="max-width: 600px;" /><br/>
        バリエーション通貨できないケース2:<br/>
        <img src="images/KUC_Sample_App_2024061902.png" alt="バリエーション通貨できないケース2" style="max-width: 600px;" /><br/>
        (2) バリデーション通過できる場合、白いページで「送信成功!」を表示するはずです。
        <p>変更するべきファイル:<br/>
        1. SampleApp202406\app\Http\Controllers\StaffListController.php<br/>
        2. SampleApp202406\app\Http\Requests\StaffRequest.php(手動的に作成してください)<br/>
        </p>
        <p>参考リンク:<br/>
        Laravel FormRequest: <a href="http://bonoponz.hatenablog.com/entry/2020/11/09/【Laravel】FormRequestクラスを使ってカスタムバリデーション" target="_blank">【Laravel】FormRequestクラスを使ってカスタムバリデーション</a><br/>
        Laravel バリエーション(+正規表現): <a href="https://laraweb.net/knowledge/6265/" target="_blank">Laravel バリデーションルール (まとめ)</a>
        </p>
    </div>
    
    @isset($errors)
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endisset

    <form action="/question23/submit" method="POST">
        @csrf

        <div class="row">
            <div class="col-4 pt-2">職員名</div>
            <div class="col-6"><input type="text" class="form-control" name="staff_name" id="staff_name" /></div>
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
            <div class="col-6"><input type="text" class="form-control" name="email" id="email" /></div>
        </div>
        
        <br/>

        <div class="form_group">
            <div class="row">
                <div class="col-2">自己紹介</div>
                <div class="col-4">
                    <textarea cols="80" rows="5" name="self_intro" id="self_intro"></textarea>
                </div>
            </div>
        </div>

        <input type="hidden" name="post_staff_flag" id="post_staff_flag" value=1 />

        <div class="row">
            <div class="col-1"><input type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-primary" value="保存"/></div>
        </div>
    </form>
@stop

@section('css')
@stop

@section('js')
@stop
