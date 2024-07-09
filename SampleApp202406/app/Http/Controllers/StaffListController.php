<?php

namespace App\Http\Controllers;

use App\Services\StaffListService;
use Illuminate\Http\Request;

class StaffListController {
    
    private StaffListService $sl_service;
    
    public function __construct(StaffListService $sl_service) 
    {
        $this->sl_service = $sl_service;
    }

    /**
     * ダッシュボード
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index() 
    {
        return view('dashboard');
    }

    /**
     * 問題1
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question1() 
    {
        $staff_list = $this->sl_service->list();

        return view('question1', compact('staff_list'));
    }

    /**
     * 問題2
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question2() 
    {
        $staff_list = $this->sl_service->filterByStaffNameWithSorting();

        return view('question2', compact('staff_list'));
    }

    /**
     * 問題3
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question3() 
    {
        $staff_list = $this->sl_service->filterByStatus();

        return view('question3', compact('staff_list'));
    }
    
    /**
     * 問題4
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question4() 
    {
        $staff_list = $this->sl_service->list();

        return view('question4', compact('staff_list'));
    }

    /**
     * 問題5
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question5() 
    {
        return view('question5');
    }

    /**
     * 問題6
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question6() 
    {
        return view('question6');
    }

    /**
     * 問題7
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question7() 
    {
        return view('question7');
    }

    /**
     * 問題8
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question8() 
    {
        return view('question8');
    }

    /**
     * 職員詳細ページ
     * 
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function staff_detail(Request $request)
    {
        // TODO: $requestを利用して「staff_id」を取得する
        $staff_id = 1;
        $staff_detail = $this->sl_service->read($staff_id);

        return view('staff_detail', compact('staff_detail'));
    }

    /**
     * 問題9
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question9() 
    {
        return view('question9');
    }

    /**
     * 問題10
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question10() 
    {
        return view('question10');
    }

    /**
     * 問題11
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question11() 
    {
        $staff_list = $this->sl_service->staffListWithTrashed();

        return view('question11', compact('staff_list'));
    }

    /**
     * 問題12
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question12() 
    {
        return view('question12');
    }

    /**
     * 問題13
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question13() 
    {
        $departments = $this->sl_service->getAllDepartments();
        return view('question13', compact('departments'));
    }

    /**
     * 問題14
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question14() 
    {
        // TODO: SampleApp202406\app\Services\StaffListService.phpの「hrTotal」関数を呼び出す
        $hr_total = null; // 人事部
        // TODO: SampleApp202406\app\Services\StaffListService.phpの「salesTotal」関数を呼び出す
        $sales_total = null; // 営業部
        // TODO: SampleApp202406\app\Services\StaffListService.phpの「developerTotal」関数を呼び出す
        $developer_total = null; // 開発部

        return view('question14', compact('hr_total', 'sales_total', 'developer_total'));
    }

    /**
     * 問題15
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question15() 
    {
        // TODO: SampleApp202406\app\Services\StaffListService.phpの「hrTotal」関数を呼び出す
        $hr_total = null; // 人事部
        // TODO: SampleApp202406\app\Services\StaffListService.phpの「salesTotal」関数を呼び出す
        $sales_total = null; // 営業部
        // TODO: SampleApp202406\app\Services\StaffListService.phpの「developerTotal」関数を呼び出す
        $developer_total = null; // 開発部

        return view('question15');
    }

    /**
     * 問題16
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question16() 
    {
        return view('question16');
    }

    /**
     * 問題16の入力フォーム提出
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question16_FormSubmittion() 
    {
        echo "入力フォーム提出成功！<br/>";
        echo "<a href='/question16'>戻る</a>";
        exit;
    }

    /**
     * 問題17
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question17() 
    {
        return view('question17');
    }

    /**
     * 問題18
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question18() 
    {
        return view('question18');
    }

    /**
     * 問題19
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question19() 
    {
        $staff_name = "営業C";
        $staff_detail = $this->sl_service->readStaffDetailWithSkills($staff_name);

        return view('question19', compact('staff_detail'));
    }

    /**
     * 問題20
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question20() 
    {
        $staff_name = "営業C";
        $staff_detail = $this->sl_service->readStaffDetailWithSkills($staff_name);

        return view('question20', compact('staff_detail'));
    }

    /**
     * 問題21
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question21() 
    {
        $staff_id = 7;
        $staff_detail = $this->sl_service->read($staff_id);
        // TODO: 「」を「」で正しく出力できるように修正する
        // ここではなくビューの方で変更でも可

        return view('question21', compact('staff_detail'));
    }

    /**
     * 問題22
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question22() 
    {
        $staff_list = $this->sl_service->list();

        return view('question22', compact('staff_list'));
    }

    /**
     * 問題23
     * 
     * @param  StaffRequest                     $staffRequest   フォームリクエストクラス
     * @return \Illuminate\Contracts\View\View
     */
    public function question23() 
    {
        return view('question23');
    }

    /**
     * 問題23のフォーム提出用関数
     * 
     * @param  StaffRequest                     $staffRequest   フォームリクエストクラス
     * @return \Illuminate\Contracts\View\View
     */
    // TODO: question23_submittion関数に「StaffRequest $staffRequest」を渡します。ただし:
    // 1. 先にStaffRequestフォームリクエストクラスの作成が必要です。
    // 2. ここでStaffRequestクラスを認識できないので、「use App\Http\Requests\StaffRequest」を追加してください
    public function question23_submittion()
    {
        // TODO: 下の「送信成功」メッセージにif else文を囲ませます
        // TRUEの条件は$staffRequest->validate()です
        echo "送信成功";
        exit;
    }

    /**
     * 問題24
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question24() 
    {
        return view('question24');
    }

    /**
     * 問題24用の職員情報検索関数
     */
    public function staff_search(Request $request)
    {
        /**
         * TODO: 
         * 1. 職員ID: $request->staff_idで職員情報を取得する。
         * SampleApp202406\app\Services\StaffListService.phpのread関数を利用可です。別のデータを読み込む関数を作成しても構いません。
         * 2. $staff_detailをJSONフォーマットで職員情報を渡すように修正する
         * 
         * ヒント: ブラウザで「http://http://127.0.0.1:8000/question24/staff_search/{職員ID}」にアクセスする時、データが表示できていればOKです。
         */
    }

    /**
     * 問題25
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question25() 
    {
        return view('question25');
    }

    /**
     * 問題25用のファイルアップロード処理関数
     */
    public function file_upload(Request $request)
    {
        /**
         * TODO: 
         * 1. 「storage/app/public/upload」存在しない場合フォルダを作成する
         * 2. php.iniで、「post_max_size」と「upload_max_filesize」の数字を20Mより大きな数字で設定する。もし既に20M以上を設定していれば大丈夫です
         * 3. if文で$request->file('upload_file')がnullではないことを判定する
         * nullの場合は「ファイルアップロード失敗」を表示する
         * 4. 「$request->file('upload_file')->getClientOriginalName()」でファイル名を取得する
         * 5. 「if($request->file('upload_file')->storeAs('upload', {ファイル名の変数}))」でファイル保存を行う。成功する場合は「ファイルアップロード成功」を表示する。逆に失敗の場合は「ファイルアップロード失敗」を表示する
         * 注意点: storeAsではなくstoreを使う場合、ファイル名がランダム文字列になります。
         * 6. ローカル環境でファイルアップロードを行い、そのファイルが「storage/app/public/upload」に存在することを確認する
         */
    }

    /**
     * 問題26
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question26() 
    {
        return view('question26');
    }

    /**
     * 問題27
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question27() 
    {
        return view('question27');
    }
}
