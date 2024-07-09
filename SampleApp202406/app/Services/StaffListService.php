<?php

namespace App\Services;

use App\Models\MstDepartment;
use App\Models\Staff;

class StaffListService 
{
    private Staff $staff;
    private MstDepartment $mst_department;

    public function __construct(Staff $staff, MstDepartment $mst_department)
    {
        $this->staff = $staff;
        $this->mst_department = $mst_department;
    }

    /**
     * 職員リスト
     * 
     * @return obj $staff_list 職員リストオブジェクト
     */
    public function list()
    {
        $staff_list = $this->staff::join('mst_departments', 'staffs.department_id', '=', 'mst_departments.id')->
            select('staffs.*', 'mst_departments.department_name')->get();
        return $staff_list;
    }

    /**
     * 職員詳細
     * 
     * @param   int $staff_id   職員ID
     * @return  obj $staff_list 職員リストオブジェクト
     */
    public function read(int $staff_id)
    {
        // TODO: 職員詳細を取得するように変更してください
        // なお、存在しない職員ID、または数字以外の入力は「404 Not Found」で表示する

        $staff_list = null;
        return $staff_list;
    }

    /**
     * ステータス有効職員リスト
     * TODO: ステータスが「1」だけの職員リストを表示する
     * 
     * @return obj $staff_list 職員リストオブジェクト
     */
    public function filterByStatus()
    {
        $staff_list = $this->staff::join('mst_departments', 'staffs.department_id', '=', 'mst_departments.id')->
            select('staffs.*', 'mst_departments.department_name')->get();
        return $staff_list;
    }

    /**
     * 職員名前に「営業」だけ含める職員リストの職員ID降順表示
     * TODO: 職員名前に「営業」だけの職員リストを「職員ID降順」で表示する
     * 
     * @return obj $staff_list 職員リストオブジェクト
     */
    public function filterByStaffNameWithSorting()
    {
        $staff_list = $this->staff::join('mst_departments', 'staffs.department_id', '=', 'mst_departments.id')->
            select('staffs.*', 'mst_departments.department_name')->get();
        return $staff_list;
    }

    /**
     * 職員一覧(部署情報を表示する)
     * TODO: 論理削除されたデータも表示するように修正してください
     * 
     * @return obj $staff_list 職員リストオブジェクト
     */
    public function staffListWithTrashed()
    {
        $staff_list = $this->staff::join('mst_departments', 'staffs.department_id', '=', 'mst_departments.id')->
            select('staffs.*', 'mst_departments.department_name')->get();
        return $staff_list;
    }

    /**
     * 全部署リストを取得する
     * 
     * @return obj $departments 職員リストオブジェクト
     */
    public function getAllDepartments()
    {
        $departments = $this->mst_department::all();
        return $departments;
    }
    
    /**
     * 人事部の合計人数を取得する
     * 
     * @return int $hr_total 人事部合計人数
     */
    public function hrTotal()
    {
        // TODO: eloquentのjoin関数とcount関数を利用して、人事部所属スタッフ人数を取得する
        $hr_total = null;
        return $hr_total;
    }
    
    /**
     * 営業部の合計人数を取得する
     * 
     * @return int $sales_total 人事部合計人数
     */
    public function salesTotal()
    {
        // TODO: eloquentのjoin関数とcount関数を利用して、営業部所属スタッフ人数を取得する
        $sales_total = null;
        return $sales_total;
    }
    
    /**
     * 開発部の合計人数を取得する
     * 
     * @return int $developer_total 開発部合計人数
     */
    public function developerTotal()
    {
        // TODO: eloquentのjoin関数とcount関数を利用して、開発部所属スタッフ人数を取得する
        $developer_total = null;
        return $developer_total;
    }

    /**
     * 職員情報とスキルを読み込む
     * 
     * @param   string  $staff_name                 職員名
     * @return  obj     $staff_detail_with_skills   職員情報とスキル
     */
    public function readStaffDetailWithSkills($staff_name)
    {
        /* TODO:
        1. 職員情報を取得する
        2. with関数を使って、職員スキルを取得する
        参考URL: https://qiita.com/HuntingRathalos/items/5a7cae35a49a2795e8f2/#1-5-条件を追加したい場合
        */
        $staff_detail_with_skills = null;
        return $staff_detail_with_skills;
    }
}
