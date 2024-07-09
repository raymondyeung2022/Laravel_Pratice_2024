<?php

namespace Database\Seeders;

use App\Models\MstDepartment;
use Illuminate\Database\Seeder;

class MstDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MstDepartment::create(
            ["department_name" => "人事部"]
        );

        MstDepartment::create(
            ["department_name" => "営業部"]
        );

        MstDepartment::create(
            ["department_name" => "開発部"]
        );
    }
}
