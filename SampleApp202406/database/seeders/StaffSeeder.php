<?php

namespace Database\Seeders;

use App\Models\Staff;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create(
            [
                "department_id" => 1,
                "staff_name" => "人事A",
                "birth_date" => "1996-10-09",
                "sex" => 1,
                "email" => "hr_a@g.dreamcareer.co.jp",
                "status" => 1,
                "self_intro" => "人事Aです。
                よろしくお願いします。"
            ]
        );

        Staff::create(
            [
                "department_id" => null,
                "staff_name" => "人事B",
                "birth_date" => "1997-01-03",
                "sex" => 2 ,
                "email" => "hr_b@g.dreamcareer.co.jp",
                "status" => 1,
            ],
        );

        Staff::create(
            [
                "department_id" => 2,
                "staff_name" => "営業A",
                "birth_date" => "1995-08-07",
                "sex" => 1 ,
                "email" => "sales_a@g.dreamcareer.co.jp",
                "status" => 1,
                "self_intro" => "営業Aです。
                よろしくお願いします。"
            ]
        );

        Staff::create(
            [
                "department_id" => 2,
                "staff_name" => "営業B",
                "birth_date" => "1998-04-08",
                "sex" => 1 ,
                "email" => "sales_b@g.dreamcareer.co.jp",
                "status" => 1,
            ]
        );

        Staff::create(
            [
                "department_id" => 2,
                "staff_name" => "営業C",
                "birth_date" => "1993-07-11",
                "sex" => 1 ,
                "email" => "sales_c@g.dreamcareer.co.jp",
                "status" => 0,
                "self_intro" => "営業Cです。私はエンジニア志望の人を精一杯サポートします。もし何かわからないことがあったら、是非相談させてください。よろしくお願いします。"
            ]
        );

        Staff::create(
            [
                "department_id" => 2,
                "staff_name" => "営業D",
                "birth_date" => "2000-12-20",
                "sex" => 2 ,
                "email" => "sales_d@g.dreamcareer.co.jp",
                "status" => 1,
            ]
        );
        
        Staff::create(
            [
                "department_id" => 3,
                "staff_name" => "開発A",
                "birth_date" => "2000-05-13",
                "sex" => 1 ,
                "email" => "develop_a@g.dreamcareer.co.jp",
                "status" => 1,
                "self_intro" => "開発Aです。<br/>
                &lt;&copy;&amp;<br/>
                よろしくお願いします。"
            ]
        );

        Staff::create(
            [
                "department_id" => 3,
                "staff_name" => "開発B",
                "birth_date" => "1999-09-30",
                "sex" => 2 ,
                "email" => "develop_b@g.dreamcareer.co.jp",
                "status" => 1,
            ]
        );
        
        Staff::create(
            [
                "department_id" => 3,
                "staff_name" => "開発C",
                "birth_date" => "2001-02-28",
                "sex" => 2 ,
                "email" => "develop_c@g.dreamcareer.co.jp",
                "status" => 1,
            ]
        );

        Staff::create(
            [
                "department_id" => 3,
                "staff_name" => "開発D",
                "birth_date" => "1997-07-28",
                "sex" => 1 ,
                "email" => "develop_d@g.dreamcareer.co.jp",
                "status" => 1,
            ]
        );

        Staff::create(
            [
                "department_id" => 3,
                "staff_name" => "開発E",
                "birth_date" => "2001-03-24",
                "sex" => 1 ,
                "email" => "develop_e@g.dreamcareer.co.jp",
                "status" => 0,
            ]
        );

        Staff::create(
            [
                "department_id" => null,
                "staff_name" => "営業D",
                "birth_date" => "2002-04-13",
                "sex" => 1 ,
                "email" => "sales_d@g.dreamcareer.co.jp",
                "status" => 0,
                "deleted_at" => Carbon::now()
            ]
        );

        Staff::create(
            [
                "department_id" => null,
                "staff_name" => "営業E",
                "birth_date" => "1999-08-21",
                "sex" => 2 ,
                "email" => "sales_e@g.dreamcareer.co.jp",
                "status" => 1,
                "deleted_at" => Carbon::now()
            ]
        );

        Staff::create(
            [
                "department_id" => null,
                "staff_name" => "人事C",
                "birth_date" => "2002-07-17",
                "sex" => 2 ,
                "email" => "hr_c@g.dreamcareer.co.jp",
                "status" => 1,
                "deleted_at" => Carbon::now()
            ]
        );
    }
}
