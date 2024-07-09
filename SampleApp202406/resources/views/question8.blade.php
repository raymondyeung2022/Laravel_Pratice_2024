@extends('adminlte::page')

@section('title', '問題8')

@include('parts.common')

@section('content_header')
    <h1>問題8</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>データベースからのデータ取得と表示の練習</h4>
        <p>数字を入力して「職員詳細を取得する」ボタンを押す時、「職員詳細ページ」に遷移しますが、エラーメッセージが表示されます</p>
        <p>表示するように修正してください</p>
        <p>なお:<br/>
           1. 何も入力せず「職員詳細を取得する」ボタンを押す時、ポップアップでエラーメッセージを表示して、遷移しないように変更してください<br/>
           2. 数字以外の文字を入力した場合、「404 Not Found」で表示するように修正してください
        <p>変更するべきファイル: </p>
        <p>1. SampleApp202406\app\Http\Controllers\StaffListController.php<br/>
           2.SampleApp202406\app\Services\StaffListService.php<br/>
        <p>
        <p>本来「SampleApp202406\routes\web.php」も修正するべきですが、今回は上記の二つファイルで大丈夫です</p>
    </div>
    <div class="row">
        <div class="col-2"><input type="text" name="staff_id" id="staff_id" /></div>
        <div class="col-2"><button name="btn_output" class="btn btn-primary" id="btn_output" onclick="GetStaffDetail();">職員詳細を取得する</button></div>
    </div>
    <br/>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
        function GetStaffDetail()
        {
            const staff_id = $("#staff_id").val();
            // TODO: 入力した値をチェックして、空文字列の場合は遷移しないように変更する
            window.location.href = "/staff_detail/"+staff_id;
        }
    </script>
@stop
