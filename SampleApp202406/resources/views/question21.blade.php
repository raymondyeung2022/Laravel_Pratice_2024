@extends('adminlte::page')

@section('title', '問題21')

@include('parts.common')

@section('content_header')
    <h1>問題21</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>HTML特殊文字表示問題</h4>
        <h5><strong>注意: 必ず問題8を回答してからやってください</strong></h5>
        <p>データベースで保存する自己紹介に「&amp;lt;&amp;copy&amp;amp;」がありますが、画面上に「<©&」として出力されてしまいます。<br/>
        正しく表示できるように修正してください</p>
        <p>今回はビューまたはコントローラーいずれの変更だけでも可です。覚えやすいと思う方法を使うのがオススメです。<br/>
        1. SampleApp202406\app\Http\Controllers\StaffListController.php<br/>
        2. SampleApp202406\resources\views\question21.blade.php<br/>
    </div>
    
    <br/>

    <div>
        <form name="staff_create" id="staff_create">
            <div class="form_group">
                <div class="row">
                    <div class="col-2">職員ID</div>
                    <div class="col-4"><?php echo $staff_detail->id ?? "" ?></div>
                </div>
            </div>

            <div>&nbsp;</div>

            <div class="form_group">
                <div class="row">
                    <div class="col-2">職員名</div>
                    <div class="col-4"><?php echo $staff_detail->staff_name ?? "" ?></div>
                </div>
            </div>

            <div>&nbsp;</div>

            <div class="form_group">
                <div class="row">
                    <div class="col-2">自己紹介</div>
                    {{--TODO: 「&lt;&copy;&amp;」を「<©&」で正しく出力できるように修正する--}}
                    {{--ここではなくコントローラーで変更でも可--}}
                    <div class="col-4"><?php echo $staff_detail->self_intro ?? "" ?></div>
                </div>
            </div>
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
