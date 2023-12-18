<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function barChart()
    {
        
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];
        $pie = [            
            'labels' => ['Category A', 'Category B', 'Category C', 'Category D', 'Category E'],
            'data' => [25, 30, 15, 10, 20],
        ];
        $scatter = [
            'labels' => ['Data Point 1', 'Data Point 2', 'Data Point 3', 'Data Point 4', 'Data Point 5'],
            'data' => [
                ['x' => 10, 'y' => 20],
                ['x' => 15, 'y' => 25],
                ['x' => 20, 'y' => 30],
                ['x' => 25, 'y' => 35],
                ['x' => 30, 'y' => 40],
            ],
        ];
        $line = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];
        return view('frontend.explore.accounts', compact('data','pie','scatter','line'));
    }
}
