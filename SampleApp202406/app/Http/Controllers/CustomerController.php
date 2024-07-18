<?php

namespace App\Http\Controllers;

use App\Services\CustomerService;

class CustomerController {
    
    private CustomerService $customer_service;
    
    public function __construct(CustomerService $customer_service) 
    {
        $this->customer_service = $customer_service;
    }

    /**
     * 問題28
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question28() 
    {        
        return view('question28');
    }

    /**
     * 問題28のCSV出力処理する関数
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function question28_outputCSV() 
    {
        $customer_list = $this->customer_service->customerList();

        // CSVファイルの各項目ヘッダー
        $csv_header = [
            "お客様ID", "お客様名前", "お客様名前カナ", "性別", "生年月日", "電話番号", "ステータス", "現郵便番号", "現住所"
        ];

        /** 
         * TODO: CSV出力機能を実装する
         * ライブラリは何でもいいです。オススメは「laravel-excel」です。
         * ライブラリを使わなくてもいいです。
         * 注意: 必ずcustomerList()中で選択しているコラムとその名前を確認してください
        */
    }
}
