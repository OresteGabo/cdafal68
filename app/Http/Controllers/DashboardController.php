<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function randomDate()
    {
        $timestamp = rand( strtotime("Jan 01 2020"), strtotime("May 01 2023") );
        $random_Date = date("d.m.Y", $timestamp );
        return $random_Date;
    }
    public function index(){
        /*
        $activities = DB::table('activity')->get();*/
        $activities=[
            ['intitule'=>'Ajout d\'un adhérent','date'=>$this->randomDate(),'description'=>'0769097991'],
            ['intitule'=>'Suppression d\'un adhérent','date'=>$this->randomDate(),'description'=>'Manque d\'activité'],
            ['intitule'=>'Paiement','date'=>$this->randomDate(),'description'=>'Enregistrement d\'un paiement Pour la formation'],
            ['intitule'=>'Mise à jour d\'un adherent','date'=>$this->randomDate(),'description'=>'Changement de son adresse'],
            ['intitule'=>'Formation','date'=> $this->randomDate(),'description'=>'Inscription à une formation'],
            ['intitule'=>'Adhérent','date'=>$this->randomDate(),'description'=>'Enregistrement d\'un enfant'],
            ['intitule'=>'Adhérent','date'=>$this->randomDate(),'description'=>'MAJ des information d\'un enfant'],
            ['intitule'=>'Adhérent','date'=>$this->randomDate(),'description'=>'Enregistrement d\'un enfant'],
            ['intitule'=>'Adhérent','date'=>$this->randomDate(),'description'=>'MAJ des information d\'un enfant']
        ];
        return view('dashboard.index',['activities'=>$activities]);
    }
}
