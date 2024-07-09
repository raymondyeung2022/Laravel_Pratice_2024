@extends('adminlte::page')

@section('title', '問題10')

@include('parts.common')

@section('content_header')
    <h1>問題10</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>Laravel AdminLTEの基礎設定練習</h4>
        <p>ページの下部にスクロールする時、空白スペースが現れます</p>
        <p>マウスでスクロールしても、左サイドバーの位置を固定させれば、空白スペースが現れないようになります。それを設定してください</p>
        <p>変更するべきファイル: <br/>
        <p>SampleApp202406\config\adminlte.php</p>
        <p>ヒント:<br/>
        1. Laravel Adminlteの公式サイト、またはLaravel Adminlteに関する設定文章を検索してください<br/>
        2. 動作確認の時、「php artisan optimize」を実行する必要があるしれません</p>
    </div>
    <div style="height: 300px;">
        <h2>テスト1</h2>
    </div>
    <br/>
    <div style="height: 300px;">
        <h2>テスト2</h2>
    </div>
    <br/>
    <div style="height: 300px;">
        <h2>テスト3</h2>
    </div>
    <br/>
    <div style="height: 300px;">
        <h2>テスト4</h2>
    </div>
    <br/>
    <div style="height: 300px;">
        <h2>テスト5</h2>
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
