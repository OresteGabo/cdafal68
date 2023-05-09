<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use App\Models\AgeGap;
use App\Models\Kid;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AdherentController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        //$adherents = DB::table('adherents')->get();
        ///TODO To create a select list that help us to sort either by name, inscription date, ...
        $adherents=Adherent::orderBy('family_name')->get();

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
        $age_gaps=AgeGap::all();
        $genders=DB::table('genders')->get();
        $education_levels=DB::table('education_level')->get();
        $legal_situations=DB::table('legal_situation')->get();
        $countries=DB::table('country')->get();
        $marital_statuses= DB::table('marital_status')->get();
        $cities= DB::table('cities')->get();


        return view('adherent.create',
            [
                'countries'=>$countries,
                'marital_statuses'=>$marital_statuses,
                'income_types'=>$income_types,
                'age_gaps'=>$age_gaps,
                'genders'=>$genders,
                'education_levels'=>$education_levels,
                'legal_situations'=>$legal_situations,
                'cities'=>$cities
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
        $adherent->dob=$request->input('dob');
        $adherent->education_level_id=$request->input('education_level_id');
        $adherent->email=$request->input('email');
        $adherent->exit_date=$request->input('exit_date');
        $adherent->family_name=$request->input('family_name');
        $adherent->first_name=$request->input('first_name');
        $adherent->french_entry_date=$request->input('french_entry_date');
        /*$request->input('gender_id');*/
        $adherent->gender_id=$request->input('gender_id');
        $adherent->income_type_id=$request->input('income_type_id');
        $adherent->legal_situation_id=$request->input('legal_situation_id');
        $adherent->marital_status_id=$request->input('marital_status_id');
        $adherent->place_of_birth=$request->input('place_of_birth');
        $adherent->city_id=$request->input('city_id');
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
        return view('adherent.show',['adherent'=>Adherent::findOrFail($id)]);
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
        $data=Adherent::findOrFail($id);
        $data->delete();
        return view('adherent.index');
    }
}

