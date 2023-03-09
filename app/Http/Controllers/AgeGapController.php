<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AgeGap;
use Illuminate\Support\Facades\DB;

class AgeGapController extends Controller
{
    //
    public function index(){
        $agegap = DB::table('age_gap')->get();
        return view('agegap',['agegaps'=>$agegap]);
    }
}
