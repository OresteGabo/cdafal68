<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdherentController extends Controller
{
    public function index(){
        return view('adherent.index');
    }
    public function show($id){
        return view('adherent.show',['id'=>$id]);
    }
    public function create(){
        return view('adherent.create');
    }
}
