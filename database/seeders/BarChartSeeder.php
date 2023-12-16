<?php

namespace Database\Seeders;

use App\Models\BarChart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BarChart::truncate();
        $faker = \Faker\Factory::create();

        for ($loop = 0; $loop < 5; $loop++) {

            DB::table("bar_charts")->insert([
                "name" => $faker->name(),
                "term1_marks" => $faker->numberBetween(45, 95),
                "term2_marks" => $faker->numberBetween(45, 95),
                "term3_marks" => $faker->numberBetween(45, 95),
                "term4_marks" => $faker->numberBetween(45, 95),
                "remarks" => $faker->randomElement(["Good", "Excellent", "Needs Improvement", "Better", "Poor"])
            ]);
        }
    }
}
