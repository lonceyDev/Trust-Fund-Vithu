<?php

namespace App\Http\Controllers;


class AccountController extends Controller
{
    public function accChart(){

        return view('frontend.explore.accounts');
    }
    public function pieChart(){
        return view('frontend.explore.pie');
    }
    public function barChart(){

        return view('frontend.explore.bar');
    }
    public function lineChart(){

        return view('frontend.explore.line');
    }
}
