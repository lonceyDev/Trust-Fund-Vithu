<?php

namespace App\Http\Controllers;

//use Google\Service\Sheets;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

class GoogleSpreadsheetController extends Controller
{
    public function index()
    {
        $sheets = Sheets::spreadsheet('1Uiw1kGzzqKRiy3WwC2j0sRB3IRIzmybL9Cj_NQRVhMs')->sheet('demo')->get();
        $header = $sheets->pull(0);
        $values = Sheets::collection(header: $header, rows: $sheets);
        $values->toArray();
        
    }
}
