<?php

namespace App\Http\Controllers;

use App\Models\CompanyStatistic;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        $statistics = CompanyStatistic::take(4)->get();
        return view('front.index', compact('statistics'));
    }
}
