<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdherentController extends Controller
{

    // THIS PHP FUNCTION WILL BE REMOVED, AND REAL DATA WILL BE INSERTED -->

            public function randomDate()
            {
                $timestamp = rand( strtotime("Jan 01 2020"), strtotime("May 01 2023") );
                $random_Date = date("d.m.Y", $timestamp );
                return $random_Date;
            }

    public function index(){
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
        return view('adherent.index',['activities'=>$activities]);
    }
    public function show($id){
        return view('adherent.show',['id'=>$id]);
    }
    public function create(){
        return view('adherent.create');
    }
}
