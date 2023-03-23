@extends('layouts.layout')

@section('content')
    @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Formulaire d\'adhésion'])
    <div class=" justify-center mt-8 sm:justify-center ">
        <h1>This is another title form</h1>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-md-9">

                <form method="POST" action="{{route('adherent.store')}}">
                    @csrf

                    @include('layouts.formcontrols.select',['name'=>'gender_id','label'=>'Civilité','required'=>'required','data_array'=>$genders])

                    @include('layouts.formcontrols.input',['value'=>'oreste','name'=>'family_name','label'=>'Nom de famille','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['value'=>'muhirwa','name'=>'first_name','label'=>'Prénom','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['value'=>'1995-06-25','name'=>'dob','label'=>'dob','required'=>'required','type'=>'date'])

                    @include('layouts.formcontrols.select',['name'=>'city_id','label'=>'Ville - CP','required'=>'required','data_array'=>$cities])

                    @include('layouts.formcontrols.input',['value'=>'0769876775','name'=>'tel','label'=>'Téléphone','required'=>'required','type'=>'tel'])
                    @include('layouts.formcontrols.input',['value'=>'oreste@gabo.fr','name'=>'email','label'=>'Email','required'=>'required','type'=>'email'])
                    @include('layouts.formcontrols.input',['value'=>'11 rue kellermann','name'=>'address','label'=>'Adresse','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.select',['value'=>'1','name'=>'education_level_id','label'=>'Education','required'=>'required','data_array'=>$education_levels])
                    @include('layouts.formcontrols.input',['name'=>'CIR','label'=>'CIR','type'=>'checkbox'])




                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="CIR" value="CIR">
                        <label class="form-check-label" for="CIR">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="QPV" value="QPV">
                        <label class="form-check-label" for="QPV">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                    </div>

                    @include('layouts.formcontrols.input',['name'=>'QPV','label'=>'QPV','type'=>'checkbox'])
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
