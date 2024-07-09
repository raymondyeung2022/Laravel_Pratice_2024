@extends('adminlte::page')

@section('title', '問題6')

@include('parts.common')

@section('content_header')
    <h1>問題6</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>javascriptの数字計算問題</h4>
        <p>数字1のテキストボックスと数字2のテキストボックスに、それぞれ数字を入力して、「足し算」ボタンをクリックしても正しく計算できません</p>
        <p>正しく計算できるように修正してください</p>
        <p>変更するべきファイル: SampleApp202406\resources\views\question.blade.php</p>
    </div>
    <div class="row">
        <div class="col-1">数字1: </div>
        <div class="col-2"><input type="text" class="form-control" name="number1" id="number1" /></div>
        <div class="col-1">数字2: </div>
        <div class="col-2"><input type="text" class="form-control" name="number2" id="number2" /></div>
        <div class="col-2"><button name="btn_plus" class="btn btn-primary" id="btn_plus" onclick="Calculate();">足し算</button></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-2">足し算の結果:</div><div id="plus_result"></div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
        function Calculate()
        {
            // TODO: 足し算で正しく計算できるように修正する
            var num1 = $("#number1").val();
            var num2 = $("#number2").val();
            var result = num1 + num2;
            $("#plus_result").html(result);
        }
    </script>
@stop
