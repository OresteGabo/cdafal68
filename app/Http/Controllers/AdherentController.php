<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdherentController extends Controller
{
    public function index(){
        return view('adherent');
    }
    public function show($id){
        return view('adherent',['id'=>$id]);
    }
}
