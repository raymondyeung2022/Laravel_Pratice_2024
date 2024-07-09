@extends('adminlte::page')

@section('title', '問題5')

@include('parts.common')

@section('content_header')
    <h1>問題5</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>javascriptでの文字列操作練習</h4>
        <p>1. テキストボックスに入力するアルファベットに、「大文字文字で表示」ボタンを押したら大文字で表示し、「小文字で表示」ボタンを押したら小文字で表示するように変更してください</p>
        <p>例: テキストボックスに「Test」で入力して、「大文字文字で表示」ボタンを押したら「入力した文字列の大文字」に「TEST」で表示する
        <p>2. テキストボックスに入力するアルファベットに、「コンマを分割して表示」を押したら、文字列にコンマ「,」が存在すれば分割して、1行ずつで表示するように変更してください</p>
        <p>例: 「人事,営業,開発」を入力したら、以下のように表示する:</p>
        <p>人事<br/>営業<br/>開発</p>
        <p>変更するべきファイル: SampleApp202406\resources\views\question5.blade.php</p>
    </div>
    <div class="row">
        <div class="col-4"><input type="text" class="form-control" name="input_text" id="input_text" /></div>
        <div class="col-2"><button name="btn_upper" class="btn btn-primary" id="btn_upper" onclick="ToUpper();">大文字で表示</button></div>
        <div class="col-2"><button name="btn_lower" class="btn btn-primary" id="btn_lower" onclick="ToLower();">小文字で表示</button></div>
        <div class="col-3"><button name="btn_lower" class="btn btn-primary" id="btn_comma" onclick="SperateByComma();">コンマを分割して表示</button></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-2">入力した文字列の大文字:</div><div id="upper_result"></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-2">入力した文字列の小文字:</div><div id="lower_result"></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-2">コンマで分割した文字列:</div><div id="comma_result"></div>
    </div>
    <br/>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
        // 大文字で表示する
        function ToUpper()
        {
            var str = $("#input_text").val();
            // TODO: 入力した文字列を大文字に変換する
        }

        // 小文字で表示する
        function ToLower()
        {
            var str = $("#input_text").val();
            // TODO: 入力した文字列を小文字に変換する
        }

        // コンマで分割入力した文字列を一行ずつ表示する
        function SperateByComma()
        {
            var str = $("#input_text").val();
            // TODO: コンマで分割入力した文字列を一行ずつ表示する
        }
    </script>
@stop
