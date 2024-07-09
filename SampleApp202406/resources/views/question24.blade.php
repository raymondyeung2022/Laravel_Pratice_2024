@extends('adminlte::page')

@section('title', '問題24')

@include('parts.common')

@section('content_header')
    <h1>問題24</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>JQueryでHTTPリクエストを行う</h4>
        <p>「職員ID」テキストボックスと「検索」ボタンがあります。以下の挙動を実装してください:</p>
        <p>
        1. 職員IDを入力せずに検索ボタンを押すと、jqueryのalert関数で「職員IDを入力してください」を表示する<br/>
        2. 職員IDを入力している状態で検索ボタンを押すと、jqueryの$.get関数で、職員情報を検索する<br/>
        3. 2で検索結果がある場合、検索ボタン下の各項目を表示する。検索結果がない場合(返却されたレスポンスが「null」とか)、jqueryのalert関数で「入力した職員IDは存在しません」を表示する
        </p>
        <p><strong>*コントローラーでビューに渡すデータはJSONのフォーマットでオススメです</strong></p>
        <p>jqueryで「$("#{元素ID名}").html({値});」でデータを表示できます。例えば: $("#staff_name").html(staff_name);</p>
        <p>問題8に似ていますが、ここはページ遷移せず、または再度読み込まずにデータを表示することです。<br/>
        なので、データを取得する関数は、問題8で実装したのをそのまま利用してもいいです。混乱だと感じでいるなら別のデータ取得する関数を作成してもいいです。</p>
        <p>変更するべきファイル:<br/>
        1. SampleApp202406\app\Http\Controllers\StaffListController.php<br/>
        2. SampleApp202406\resources\views\question24.blade.php<br/>
        </p>
        <p>参考リンク:<br/>
        ・<a href="https://www.sejuku.net/blog/43650" target="_blank">【jQuery入門】get()の使い方とデータを取得する方法！</a><br/>
        ・<a href="https://javascript-jp.dev/articles/4775414" target="_blank">【徹底解説】jQueryを使ってdivのinnerHTMLを自由自在に操る</a><br/>
        ・<a href="https://www.sejuku.net/blog/47716" target="_blank">【JavaScript入門】JSONの作成とparse() / stringify()の使い方！</a><br/>
        </p>
    </div>

    <div class="row">
        <div class="col-4 pt-2">職員ID</div>
        <div class="col-6"><input type="text" class="form-control" name="staff_id" id="staff_id" /></div>
    </div>
    
    <br/>

    <div class="row">
        <div class="col-1"><input type="button" name="btnSearch" id="btnSearch" class="btn btn-primary" value="検索" onclick="SearchStaff();"/></div>
    </div>

    <br/>

    <div class="row">
        <div class="col-2">職員名: </div>
        <div class="col-2" id="staff_name"></div>
    </div>

    <br/>

    <div class="row">
        <div class="col-2">生年月日: </div>
        <div class="col-2" id="birth_date"></div>
    </div>

    <br/>

    <div class="row">
        <div class="col-2">メールアドレス: </div>
        <div class="col-2" id="email"></div>
    </div>

    <br/>

    <div class="row">
        <div class="col-2">自己紹介: </div>
        <div class="col-2" id="self_intro"></div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
        function SearchStaff()
        {
            var staff_id = $("#staff_id").val();
            /**
             *  TODO:
             *  1. if文でstaff_idの値を確認する。空文字列の場合はalert「関数で職員IDを入力してください」を表示する。
             *  2. 空文字列でなければ、$.getで職員IDで職員情報を取得する
             *  3. 取得した職員情報を、「検索」ボタン下の各項目にデータを表示する
             * 
             * 検索ルート: /question24/staff_search/{staff_id}
             * 
             *  ヒント: 
             *  1. {staff_id}にjavascriptの変数で渡すように変更してください
             *  2. コンソール出力でデータの中身を確認できます
             *  3. JSON.parse関数でJSONフォーマットデータを配列変数として格納させます。そして「{配列変数}.{項目名}」で指定する項目を取得できます
             *  例: 
             *  var formatted_data = JSON.parse(data);
                $("#staff_name").html(formatted_data.staff_name);
             **/ 
        }
    </script>
@stop
