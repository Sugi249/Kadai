<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    //

    public function index(Request $request){
        $str_exclusion = $request->input('number');
       
        $exclusion = json_decode($str_exclusion);


        $squared = $str_exclusion** 2;

        return $squared;
    }
    public function Cube(Request $request){
        $str_exclusion = $request->input('number');
       
        $exclusion = json_decode($str_exclusion);
 
$cube =$str_exclusion ** 3;
 return $cube;
    }
    public function Circle(Request $request){
        $str_exclusion = $request->input('number');
       
        $exclusion = json_decode($str_exclusion);
   
$area_circle = $str_exclusion**2*3.14;
return $area_circle;
    }
}
