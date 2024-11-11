<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistanceCostController extends Controller
{
    public function index(){
        return view ('calculator');
    }

    public function calculate(Request $request){
         $distance=$request->input("distance");
         $rate=$request->input('rate');
        $cost=$distance*$rate;

        return view('calculator', compact('distance','rate','cost'));
    }
}
