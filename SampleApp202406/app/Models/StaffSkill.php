<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffSkill extends Model
{
    use HasFactory;

    // テーブルの指定
    protected $table = 'staff_skills';
    
    // 変更可能なカラムを指定
    protected $fillable = ['staff_id', 'skill_id'];
}
