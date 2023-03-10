<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KidsController extends Controller
{
    //

    public function index(){
        $kids=array();

        return view('kids.index',['kids'=>$kids]);
    }
    public function show($id){
        return view('kids.show',['id'=>$id]);
    }
    public function create(){
        $parents= DB::table('adherent')->get();
        return view('kids.create',['parents'=>$parents]);
    }
}
