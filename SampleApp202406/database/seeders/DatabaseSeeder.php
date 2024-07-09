<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MstDepartmentSeeder::class,
            MstSkillSeeder::class,
            StaffSeeder::class,
            StaffSkillSeeder::class,
            /*
            CategorySeeder::class,
            TagSeeder::class,
            CustomerSeeder::class,
            ProductSeeder::class,
            ProductTagSeeder::class,
            OrderStatusSeeder::class,
            OrderSeeder::class,
            OrderProductSeeder::class,
            */
        ]);
    }
}
