<?php

namespace Database\Seeders;

use App\Models\StaffSkill;
use Illuminate\Database\Seeder;

class StaffSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 人事Aのスキル
        StaffSkill::create(
            [
                "staff_id" => 1,
                "skill_id" => 1, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 1,
                "skill_id" => 2, 
            ]
        );
        
        StaffSkill::create(
            [
                "staff_id" => 1,
                "skill_id" => 3, 
            ]
        );
        
        // 人事Bのスキル
        StaffSkill::create(
            [
                "staff_id" => 2,
                "skill_id" => 1, 
            ]
        );
        
        StaffSkill::create(
            [
                "staff_id" => 2,
                "skill_id" => 3, 
            ]
        );
        
        // 営業Aのスキル
        StaffSkill::create(
            [
                "staff_id" => 3,
                "skill_id" => 4, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 3,
                "skill_id" => 5, 
            ]
        );
        
        // 営業Bのスキル
        StaffSkill::create(
            [
                "staff_id" => 4,
                "skill_id" => 1, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 4,
                "skill_id" => 2, 
            ]
        );
        
        StaffSkill::create(
            [
                "staff_id" => 4,
                "skill_id" => 4, 
            ]
        );

        // 営業Cのスキル
        StaffSkill::create(
            [
                "staff_id" => 5,
                "skill_id" => 2, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 5,
                "skill_id" => 3, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 5,
                "skill_id" => 4, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 5,
                "skill_id" => 5, 
            ]
        );

        // 営業Dのスキル
        StaffSkill::create(
            [
                "staff_id" => 6,
                "skill_id" => 4, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 6,
                "skill_id" => 5, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 6,
                "skill_id" => 6, 
            ]
        );

        // 開発Aのスキル
        StaffSkill::create(
            [
                "staff_id" => 7,
                "skill_id" => 6, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 7,
                "skill_id" => 7, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 7,
                "skill_id" => 8, 
            ]
        );

        // 開発Bのスキル
        StaffSkill::create(
            [
                "staff_id" => 8,
                "skill_id" => 6, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 8,
                "skill_id" => 7, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 8,
                "skill_id" => 8, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 8,
                "skill_id" => 9, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 8,
                "skill_id" => 10, 
            ]
        );

        // 開発Cのスキル
        StaffSkill::create(
            [
                "staff_id" => 9,
                "skill_id" => 14, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 9,
                "skill_id" => 15, 
            ]
        );

        // 開発Dのスキル
        StaffSkill::create(
            [
                "staff_id" => 10,
                "skill_id" => 4, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 10,
                "skill_id" => 14, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 10,
                "skill_id" => 16, 
            ]
        );

        // 開発Eのスキル
        StaffSkill::create(
            [
                "staff_id" => 11,
                "skill_id" => 1, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 11,
                "skill_id" => 2, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 11,
                "skill_id" => 3, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 11,
                "skill_id" => 6, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 11,
                "skill_id" => 7, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 11,
                "skill_id" => 8, 
            ]
        );

        StaffSkill::create(
            [
                "staff_id" => 11,
                "skill_id" => 10, 
            ]
        );
    }
}
