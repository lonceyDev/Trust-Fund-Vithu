<?php

namespace App\Http\Controllers;

use App\Models\BarChart;
use Illuminate\Http\Request;

class BarChartController extends Controller
{
    public function index()
    {
        $barcharts= BarChart::all();

        $dataPoints = [];
        $terms = ["Term 1", "Term 2", "Term 3", "Term 4"];
         
        foreach ($barcharts as $barchar) {

            $dataPoints[] = array(
                "name" => $barchar['name'],
                "data" => [
                    intval($barchar['term1_marks']),
                    intval($barchar['term2_marks']),
                    intval($barchar['term3_marks']),
                    intval($barchar['term4_marks']),
                ],
            );
        }

        return view('frontend.account.pie', [
            "data" => json_encode($dataPoints),
            "terms" => json_encode($terms),
        ]);
    }
    
}
