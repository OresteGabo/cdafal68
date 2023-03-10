@extends('layouts.layout')
@section('content')
    <p>This is adherents index</p>
@endsection
@section('more_data')
    @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Formulaire d\'adhésion'])
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post">
                    @csrf

                    @include('layouts.formcontrols.input',['name'=>'name','label'=>'Nom de famille','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['name'=>'surname','label'=>'Prénom','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['name'=>'surname','label'=>'date_of_birth','required'=>'required','type'=>'date'])
                    @include('layouts.formcontrols.input',['name'=>'postal_code','label'=>'Code postale','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['name'=>'tel','label'=>'Téléphone','required'=>'required','type'=>'tel'])
                    @include('layouts.formcontrols.input',['name'=>'email','label'=>'Email','required'=>'required','type'=>'email'])
                    @include('layouts.formcontrols.input',['name'=>'postal_code','label'=>'Code postale','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.select',['name'=>'age_gap','label'=>'Tranche d\'age','required'=>'required','data_array'=>$age_gaps])
                    @include('layouts.formcontrols.select',['name'=>'place_of_birth','label'=>'Lieu de naissance','required'=>'required','data_array'=>$countries])
                    @include('layouts.formcontrols.select',['name'=>'citizenship','label'=>'Nationalité','required'=>'required','data_array'=>$countries])
                    @include('layouts.formcontrols.select',['name'=>'marital_status','label'=>'Situation familiale','required'=>'required','data_array'=>$marital_statuses])
                    @include('layouts.formcontrols.select',['name'=>'income_type','label'=>'Revenu','required'=>'required','data_array'=>$income_types])
                    @include('layouts.formcontrols.input',['name'=>'registration_date','label'=>'Date d\'adhésion','required'=>'required','type'=>'date'])

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Créer adhérent</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
