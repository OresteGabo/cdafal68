<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AdherentController extends Controller
{
    private function randomDate()
    {
        $timestamp = rand( strtotime("Jan 01 2020"), strtotime("May 01 2023") );
        $random_Date = date("d.m.Y", $timestamp );
        return $random_Date;
    }
    private function getAdherents(){
        return  array(
            array("id" => 1, "first_name" => "John", "family_name" => "Doe", "date_of_birth" => "1990-01-01", "tel" => "+1-123-456-7890", "email" => "john.doe@example.com", "country_of_birth" => 1, "citizenship" => 1),
            array("id" => 2, "first_name" => "Jane", "family_name" => "Doe", "date_of_birth" => "1992-05-15", "tel" => "+1-234-567-8901", "email" => "jane.doe@example.com", "country_of_birth" => 1, "citizenship" => 1),
            array("id" => 3, "first_name" => "Bob", "family_name" => "Smith", "date_of_birth" => "1985-07-22", "tel" => "+44-123-456-7890", "email" => "bob.smith@example.com", "country_of_birth" => 2, "citizenship" => 2),
            array("id" => 4, "first_name" => "Alice", "family_name" => "Jones", "date_of_birth" => "1987-11-30", "tel" => "+44-234-567-8901", "email" => "alice.jones@example.com", "country_of_birth" => 2, "citizenship" => 2),
            array("id" => 5, "first_name" => "David", "family_name" => "Lee", "date_of_birth" => "1993-03-18", "tel" => "+86-123-456-7890", "email" => "david.lee@example.com", "country_of_birth" => 3, "citizenship" => 3),
            array("id" => 6, "first_name" => "Lucy", "family_name" => "Chen", "date_of_birth" => "1995-08-02", "tel" => "+86-234-567-8901", "email" => "lucy.chen@example.com", "country_of_birth" => 3, "citizenship" => 3),
            array("id" => 7, "first_name" => "Mohammed", "family_name" => "Ali", "date_of_birth" => "1984-02-14", "tel" => "+971-123-456-7890", "email" => "mohammed.ali@example.com", "country_of_birth" => 4, "citizenship" => 4),
            array("id" => 8, "first_name" => "Fatima", "family_name" => "Khan", "date_of_birth" => "1988-10-07", "tel" => "+971-234-567-8901", "email" => "fatima.khan@example.com", "country_of_birth" => 4, "citizenship" => 4),
            array("id" => 9, "first_name" => "Juan", "family_name" => "Garcia", "date_of_birth" => "1991-06-23", "tel" => "+34-123-456-7890", "email" => "juan.garcia@example.com", "country_of_birth" =>1, "citizenship"=>2));

    }
    private function getAgeGaps(){
        return array(
            array('id'=>1,'label'=>'moins de 18 ans'),
            array('id'=>2,'label'=>'de 18 à 25 ans'),
            array('id'=>3,'label'=>'de 26 à 64 ans'),
            array('id'=>4,'label'=>'plus de 64 ans')
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $adherents = DB::table('adherents')->get();
        //$adherents=Adherent::all();
        return view('adherent.index',['adherents'=>$adherents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(){





        $income_types=DB::table('income_type')->get();

        ///TODO Replace this data with database data
        $age_gaps=DB::table('age_gaps')->get();

        $genders=DB::table('genders')->get();

        $education_levels=DB::table('education_level')->get();

        $legal_situations=DB::table('legal_situation')->get();
        $countries=DB::table('country')->get();
        $marital_statuses= DB::table('marital_status')->get();


        return view('adherent.create',
            [
                'countries'=>$countries,
                'marital_statuses'=>$marital_statuses,
                'income_types'=>$income_types,
                'age_gaps'=>$age_gaps,
                'genders'=>$genders,
                'education_levels'=>$education_levels,
                'legal_situations'=>$legal_situations
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $adherent =new Adherent();

        $adherent->address=$request->input('address');

        $adherent->CIR=True;
        $adherent->citizenship=$request->input('citizenship');
        $adherent->date_of_birth=$request->input('date_of_birth');
        $adherent->education_level_id=$request->input('education_level_id');
        $adherent->email=$request->input('email');
        $adherent->exit_date=$request->input('exit_date');
        $adherent->family_name=$request->input('family_name');
        $adherent->first_name=$request->input('first_name');
        $adherent->french_entry_date=$request->input('french_entry_date');
        $adherent->gender_id=1;/*$request->input('gender_id');*/
        $adherent->gender_id=$request->input('gender_id');
        $adherent->income_type_id=$request->input('income_type_id');
        $adherent->legal_situation_id=$request->input('legal_situation_id');
        $adherent->marital_status_id=$request->input('marital_status_id');
        $adherent->place_of_birth=$request->input('place_of_birth');
        $adherent->postal_code_id=$request->input('postal_code_id');
        $adherent->QPV=False;
        $adherent->registration_date=$request->input('registration_date');
        $adherent->tel=$request->input('tel');
        $adherent->age_gap_id=$request->input('age_gap_id');
        /*$adherent->updated_at='1-1-2000';
        $adherent->created_at='1-1-2000';*/

        $adherent->save();
        return redirect()->route('adherent.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $adherents=DB::table('adherent')->get();
        var_dump($adherents);
        $index= array_search($id,array_column((array)$adherents,'id'));
        if($index===false){
            abort(404);
        }

        return view('adherent.show',['adherent'=>$adherents[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

