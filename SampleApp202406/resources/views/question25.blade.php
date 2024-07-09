@extends('adminlte::page')

@section('title', '問題25')

@include('parts.common')

@section('content_header')
    <h1>問題25</h1>
@stop

@section('content')
    <a href="/" class="btn btn-info" role="button">問題一覧</a>
    <hr/>

    <div>
        <h4>ファイルアップロード</h4>
        <p>下にファイルアップロードフォームがあります。<br/>
        ローカル環境で選択したファイルを、「storage/app/public/upload」に保存できるように実装してください。<br/>
        なお、アップロードできない場合は、php.iniの設定で、アップロードできるように調整してください。<br/>
        </p>
        <p>
        実装の流れ:<br/>
        1. 「storage/app/public」に「upload」フォルダを作成し、ルートディレクトリ(SampleApp202406)で「php artisan storage:link」で、<br/>
        「storage/app/public/upload」へのシンボリックリンクを作成してください。<br/>
        2. ネット上で調査してから、php.iniでファイルアップロード上限サイズとPOST上限サイズ設定してください。<br/>
        (サイズは任意の数字でもいいですが、一般的に20MBまで設定する場合が多いです。既に20MB以上の場合は変更しなくても大丈夫です)<br/>
        3. コントローラーで取得したファイルを「storage/app/public/upload」に保存します。<br/>
        4. 「storage/app/public/upload」でアップロードしたファイルの存在を確認します。
        </p>
        <p>おまけ:<br/>
        <span class="text-danger fw-bold">1. ファイルinputが存在するHTMLフォームは、必ず「enctype="multipart/form-data"」指定しましょう。</span><br/>
        2. 「php_info」という関数で様々な設定を確認できます。<br/>
        3. HTMLのファイルinputに、許可するファイル拡張子を指定できます。<br/>
        4. Laravel Storageは、違うデバイスに対して同じメソッドでファイル操作・ディレクトリ操作できるライブラリです。(例えば、Amazon S3)<br/>
        5. PHPでフォルダを作成できますが、環境によって、権限の問題で作成できない場合があります。<br/>
        例えば、Amazon EC2 + LAMP環境で、デフォルトユーザー「ec-user」が「apache」のグループに所属していないため、設定しないとファイルアップロードにエラーが起こります。
        </p>
        <p>変更するべきファイル: SampleApp202406\app\Http\Controllers\StaffListController.php</p>
        <p>参考リンク:<br/>
        ・<a href="https://reffect.co.jp/laravel/laravel-storage-manipulation-master" target="_blank">Laravel Storageでファイル操作マスター</a><br/>
        ・<a href="https://engineer-life.dev/linux-symblic-link/" target="_blank">【Linux】シンボリックリンクの作成,確認,変更,削除について解説</a><br/>
        ・<a href="https://note.affi-sapo-sv.com/php-upload-size.php" target="_blank">【PHP】 アップロード可能な上限ファイルサイズの調べ方と注意点</a><br/>
        ・<a href="https://mugenup-tech.hatenadiary.com/entry/2014/08/28/100910" target="_blank">enctype='multipart/form-data'ってなんだ？</a><br/>
        </p>
        <br/>
        <p>サンプルスファイルアップロードクリーンショット:<br/>
            <img src="images/KUC_Sample_App_2024062101.png" alt="アップロードデモ" style="max-width: 600px;"  />
        </p>
    </div>

    <form action="/question25/file_upload" method="POST">
        @csrf

        <p>ファイルアップロードフォーム</p>

        <div class="row">
            <div class="col-4">
                <div class="input-group">
                    <label class="input-group-btn">
                        <span class="btn btn-primary">
                            ファイル選択<input type="file" name="upload_file" id="upload_file" style="display:none">
                        </span>
                    </label>
                    <input type="text" class="form-control" readonly="">
                </div>
            </div>
        </div>

        <br/>

        <div class="row">
            <div class="col-1"><input type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-primary" value="提出"/></div>
        </div>
    </form>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
        $(document).on('change', ':file', function() {
            var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.parent().parent().next(':text').val(label);
        });
    </script>
@stop
