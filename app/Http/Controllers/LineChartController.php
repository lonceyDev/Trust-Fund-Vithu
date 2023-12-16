<?php

namespace App\Http\Controllers;

use App\Models\LineChart;
use Illuminate\Http\Request;

class LineChartController extends Controller
{
    public function index()
    {
        $linecharts = LineChart::all();

        $dataPoints = [];
        $terms = ["Term 1", "Term 2", "Term 3", "Term 4"];

        foreach ($linecharts as $linechart) {

            $dataPoints[] = array(
                "name" => $linechart['name'],
                "data" => [
                    intval($linechart['term1_marks']),
                    intval($linechart['term2_marks']),
                    intval($linechart['term3_marks']),
                    intval($linechart['term4_marks']),
                ],
            );
        }

        return view('frontend.account.pie', [
            "data" => json_encode($dataPoints),
            "terms" =>json_encode($terms),
        ]);
    }
}
