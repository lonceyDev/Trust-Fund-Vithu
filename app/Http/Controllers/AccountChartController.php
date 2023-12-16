<?php

namespace App\Http\Controllers;

use App\Models\AccountChart;
use App\Models\BarChart;
use App\Models\LineChart;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;

class AccountChartController extends Controller
{
    public function index()
    {
        $browsers = AccountChart::all();

        $dataPoints = [];

        foreach ($browsers as $browser) {

            $dataPoints[] = [
                "name" => $browser['name'],
                "y" => floatval($browser['total_usage'])
            ];
        }

        return view('frontend.Account.pie', [

            "data" => json_encode($dataPoints),
            "terms" => json_encode([]),
        ]);
    }
      
    
}
