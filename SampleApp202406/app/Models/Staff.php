<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // テーブルの指定
    protected $table = 'staffs';
    
    // 主キーを指定
    protected $primaryKey = 'id';
    
    // 変更可能なカラムを指定
    protected $fillable = ['department_id', 'staff_name', 'birth_date', 'sex', 'email', 'self_intro'];

    /**
     * StaffモデルとStaffSkillモデルの一対多のリレーション
     *
     * @return  App\Models\StaffSkill  職員スキルリスト
     *
     */
    public function skills()
    {
        // StaffSkillモデルを多数持つ
        // 第一引数：子テーブル、第二引数：子テーブルの外部キー
        return $this->hasMany(StaffSkill::class, 'staff_id');
    }
}
