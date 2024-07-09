<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstSkill extends Model
{
    use HasFactory;

    // テーブルの指定
    protected $table = 'mst_skills';
    
    // 主キーを指定
    protected $primaryKey = 'id';
    
    // 変更可能なカラムを指定
    protected $fillable = ['skill_name'];
}
