<?php

namespace Database\Seeders;

use App\Models\MstSkill;
use Illuminate\Database\Seeder;

class MstSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstSkill::create(
            ["skill_name" => "Ms Word"],
        );

        MstSkill::create(
            ["skill_name" => "Ms Excel"],
        );

        MstSkill::create(
            ["skill_name" => "Ms PowerPoint"],
        );

        MstSkill::create(
            ["skill_name" => "Adobe Photoshop"],
        );

        MstSkill::create(
            ["skill_name" => "Adobe Illustrator"],
        );
        
        MstSkill::create(
            ["skill_name" => "HTML"],
        );
        
        MstSkill::create(
            ["skill_name" => "CSS"],
        );

        MstSkill::create(
            ["skill_name" => "Javascript"],
        );

        MstSkill::create(
            ["skill_name" => "JQuery"],
        );

        MstSkill::create(
            ["skill_name" => "AJAX"],
        );

        MstSkill::create(
            ["skill_name" => "PHP"],
        );

        MstSkill::create(
            ["skill_name" => "Laravel"],
        );

        MstSkill::create(
            ["skill_name" => "Wordpress"],
        );

        MstSkill::create(
            ["skill_name" => "C#"],
        );

        MstSkill::create(
            ["skill_name" => "ASP.NET"],
        );

        MstSkill::create(
            ["skill_name" => "Java"],
        );
    }
}
