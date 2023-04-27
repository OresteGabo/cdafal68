<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use App\Models\Kid;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $kids = DB::table('kids')->get();
        //$adherents=Adherent::all();
        return view('kids.index',['kids'=>$kids]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $parents=DB::table('adherents')->get();
        $genders=DB::table('genders')->get();

        return view('kids.create',['parents'=>$parents,'genders'=>$genders]);
    }

    /**
     * Store a newly created resource in storage.

     */
    public function store(Request $request)
    {

        $kid =new Kid();

        $kid->first_name=$request->input('first_name');

        $kid->is_handicapped=(bool)$request->input('is_handicapped');
        $kid->family_name=$request->input('family_name');
        $kid->gender_id=$request->input('gender_id');
        $kid->parent_id=$request->input('parent_id');
        $kid->dob=$request->input('dob');
        $kid->save();
        return redirect()->route('kids.index');

        /*
                $kid = Kid::create([
                    'first_name' => $request->input('first_name'),
                    'family_name' => $request->input('family_name'),
                    'dob' => $request->input('dob'),
                    'gender_id' => $request->input('gender_id'),
                    'parent_id' => $request->input('parent_id'),
                ]);*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
