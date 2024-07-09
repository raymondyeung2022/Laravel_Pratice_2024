@extends('adminlte::page')

@section('title', '問題7')

@include('parts.common')

@section('content_header')
    <h1>問題7</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>javascriptでのコンソール出力練習</h4>
        <p>「コンソール出力」ボタンを押しても、入力した文字列がブラウザのコンソール出力に何も出力されていません。</p>
        <p>コンソール出力できるように修正してください</p>
        <p>ヒント: コンソール出力の方法を調べてみてください</p>
        <p>変更するべきファイル: SampleApp202406\resources\views\question7.blade.php</p>
    </div>
    <div class="row">
        <div class="col-1 pt-1">テキスト:</div>
        <div class="col-2"><input type="text" class="form-control" name="txt_input" id="txt_input" /></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-2"><button name="btn_output" class="btn btn-primary" id="btn_output" >コンソール出力</button></div>
    </div>
    <br/>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
    // TODO: コンソール出力機能を実装する
    </script>
@stop
