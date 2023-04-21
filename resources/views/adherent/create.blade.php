@extends('layouts.layout')

@section('content')
    @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Formulaire d\'adhésion'])

    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-md-9">

                <form method="POST" action="{{route('adherent.store')}}">
                    @csrf

                    @include('layouts.formcontrols.select',['name'=>'gender_id','label'=>'Civilité','required'=>'required','data_array'=>$genders])
                    <div class="form-group ">
                        <label for="gender">Civilité</label>
                        <div class="form-check-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender_1" value="1" checked>
                                <label class="form-check-label" for="gender_1">Homme</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender_2" value="2">
                                <label class="form-check-label" for="gender_2">Femme</label>
                            </div>

                        </div>
                    </div>
                    @include('layouts.formcontrols.input',['value'=>'oreste','name'=>'family_name','label'=>'Nom de famille','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['value'=>'muhirwa','name'=>'first_name','label'=>'Prénom','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['value'=>'1995-06-25','name'=>'dob','label'=>'Date de naissance','required'=>'required','type'=>'date'])

                    @include('layouts.formcontrols.select',['name'=>'city_id','label'=>'Adresse (Ville - CP)','required'=>'required','data_array'=>$cities])

                    @include('layouts.formcontrols.input',['value'=>'0769876775','name'=>'tel','label'=>'Téléphone','required'=>'required','type'=>'tel'])
                    @include('layouts.formcontrols.input',['value'=>'oreste@gabo.fr','name'=>'email','label'=>'Email','required'=>'required','type'=>'email'])
                    @include('layouts.formcontrols.input',['value'=>'11 rue kellermann','name'=>'address','label'=>'Adresse','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.select',['value'=>'1','name'=>'education_level_id','label'=>'Education','required'=>'required','data_array'=>$education_levels])



                    <div class="form-group ">
                        <label for="age_range">Age Range:</label>
                        <div class="form-check-inline">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age_range" id="age_range_1" value="1-18" checked>
                            <label class="form-check-label" for="age_range_1">1-18</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age_range" id="age_range_2" value="19-35">
                            <label class="form-check-label" for="age_range_2">19-35</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age_range" id="age_range_3" value="36-50">
                            <label class="form-check-label" for="age_range_3">36-50</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age_range" id="age_range_4" value="51+">
                            <label class="form-check-label" for="age_range_4">51+</label>
                        </div>
                        </div>
                    </div>





                    <label for="CIR">CIR:</label>
                    <div class="checkbox-container">
                        <input type="checkbox" id="CIR" name="CIR">
                        <!--<span class="checkmark"></span>-->
                    </div>
                    <label for="QPV">QPV:</label>
                    <div class="checkbox-container">
                        <input type="checkbox" id="QPV" name="QPV">
                        <!--<span class="checkmark"></span>-->
                    </div>







                    @include('layouts.formcontrols.select',['value'=>'2','name'=>'age_gap_id','label'=>'Tranche d\'age','required'=>'required','data_array'=>$age_gaps])
                    @include('layouts.formcontrols.select',['value'=>'2','name'=>'marital_status_id','label'=>'Situation familiale','required'=>'required','data_array'=>$marital_statuses])
                    @include('layouts.formcontrols.select',['value'=>'3','name'=>'income_type_id','label'=>'Revenu','required'=>'required','data_array'=>$income_types])
                    @include('layouts.formcontrols.select',['name'=>'place_of_birth','label'=>'Lieu de naissance','required'=>'required','data_array'=>$countries])
                    @include('layouts.formcontrols.select',['name'=>'citizenship','label'=>'Nationalité','required'=>'required','data_array'=>$countries])
                    @include('layouts.formcontrols.select',['value'=>'2','name'=>'legal_situation_id','label'=>'Situation administrative','required'=>'required','data_array'=>$legal_situations])
                    @include('layouts.formcontrols.input',['value'=>'2000-02-03','name'=>'registration_date','label'=>'Date d\'adhésion','required'=>'required','type'=>'date'])
                    @include('layouts.formcontrols.input',['value'=>'2005-02-03','name'=>'french_entry_date','label'=>'Date d\'entré en France','required'=>'required','type'=>'date'])
                    @include('layouts.formcontrols.input',['value'=>'2007-02-03','name'=>'exit_date','label'=>'Date de sortie','type'=>'date'])


                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Créer adhérent</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
