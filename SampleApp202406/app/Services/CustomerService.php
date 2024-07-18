<?php

namespace App\Services;

use App\Models\Customer;

class CustomerService 
{
    private Customer $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * お客様の情報を読み込む
     * status = 0: 無効
     * status = 1: 有効
     * sex = 1: 男性
     * sex = 2: 女性
     * 
     * @return  obj     $customer_list   お客様の情報
     */
    public function customerList()
    {
        $customer_list = $this->customer
            ->selectRaw("id AS customer_id, CONCAT(last_name, ' ', first_name) AS customer_name, 
            CONCAT(last_name_kana, ' ', first_name_kana) AS customer_name_kana,
            CASE WHEN sex = 1 THEN '男性' WHEN sex = 2 THEN '女性' END AS sex,
            DATE_FORMAT(birth_date, '%Y/%m/%d') AS birth_date, phone,
            CASE WHEN status = 0 THEN '無効' WHEN status = 1 THEN '有効' END AS status, current_postcode, current_address")
            ->orderBy('id', 'ASC')
            ->get();

        return $customer_list;
    }
}
