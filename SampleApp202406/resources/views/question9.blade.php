@extends('adminlte::page')

@section('title', '問題9')

@include('parts.common')

@section('content_header')
    <h1>問題9</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>javascriptのページスクロール練習</h4>
        <p>それぞれのボタンを押す時、javascriptで該当divの位置まで自動的にスクロールするように設定してください(&#64;section('js')のところに)</p>
        <p>変更するべきファイル: SampleApp202406\resources\views\question9.blade.php</p>
    </div>
    <div class="row">
        <div class="col-1"><button name="btn_anchor1" class="btn btn-primary" id="btn_anchor1" onclick="scrollToDiv('div_anchor1');">エリア1</button></div>
        <div class="col-1"><button name="btn_anchor2" class="btn btn-primary" id="btn_anchor2" onclick="scrollToDiv('div_anchor2');">エリア2</button></div>
        <div class="col-1"><button name="btn_anchor3" class="btn btn-primary" id="btn_anchor3" onclick="scrollToDiv('div_anchor3');">エリア3</button></div>
        <div class="col-1"><button name="btn_anchor4" class="btn btn-primary" id="btn_anchor4" onclick="scrollToDiv('div_anchor4');">エリア4</button></div>
        <div class="col-1"><button name="btn_anchor5" class="btn btn-primary" id="btn_anchor5" onclick="scrollToDiv('div_anchor5');">エリア5</button></div>
    </div>
    <br/>
    <div id="div_anchor1" style="height: 300px;">
        <h2>ここはエリア1です</h2>
    </div>
    <br/>
    <div id="div_anchor2" style="height: 300px;">
        <h2>ここはエリア2です</h2>
    </div>
    <br/>
    <div id="div_anchor3" style="height: 300px;">
        <h2>ここはエリア3です</h2>
    </div>
    <br/>
    <div id="div_anchor4" style="height: 300px;">
        <h2>ここはエリア4です</h2>
    </div>
    <br/>
    <div id="div_anchor5" style="height: 300px;">
        <h2>ここはエリア5です</h2>
    </div>
    <br/>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
        function scrollToDiv(id)
        {
            // TODO: 該当divまでスクロールする
        }
    </script>
@stop
