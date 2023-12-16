<?php

namespace Database\Seeders;

use App\Models\AccountChart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccountChart::truncate();
        
          $data = [
                [
                    "name" => "Individual Donors",
                    "total_usage" => 40,
                ],
                [
                    "name" => "Corporate Sponsors",
                    "total_usage" => 30,
                ],
                [
                    "name" => "Grants",
                    "total_usage" => 30,
                ],
             
            ];
    

        AccountChart::insert($data);
    
    }
}
