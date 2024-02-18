<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function gotoChartPage(){
        return view('charts');
    }

    public function gotoChartPage2(){
        return view('charts2');
    }

    public function gotoChartPage3(){
        return view('charts3');
    }
}
