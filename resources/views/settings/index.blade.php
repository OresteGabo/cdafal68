
@extends('layouts.layout')


@section('quick_links')
    {{--<div class="overview">
        @include('layouts.heading.content_title',['icon'=>'uil uil-tachometer-fast-alt','label'=>'Liens rapide'])

        <div class="boxes">
            @include('layouts.heading.box',['box_number'=>'1','icon'=>'uil uil-user','label'=>count($adherents).' '.'Adherents','data'=>''])
            @include('layouts.heading.box',['box_number'=>'2','icon'=>'uil uil-user-plus','label'=>'Ajouter','data'=>'','url'=>route('adherent.create')])
            @include('layouts.heading.box',['box_number'=>'3','icon'=>'uil uil-external-link-alt','label'=>'Autre actions','data'=>''])
        </div>
    </div>--}}
@endsection

@section('content')
    <ul class="accordion">
        <li>
            <input type="radio" name="accordion" id="agegap" checked>
            <label for="agegap">Tranche d'âge</label>
            <div class="content">
                <form method="POST" action="{{url('agegap')}}">
                    @csrf
                    <div class='form-check-inline'>
                        <ul>
                            @foreach ($age_gaps as $age_gap)
                                <li>{{$age_gap->id}} - {{$age_gap->label}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @include('layouts.formcontrols.input',['name'=>'agegap','label'=>'Valeur tranche d\'age','required'=>'required','type'=>'text'])
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a  class="btn btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="gender">
            <label for="gender">Civilité</label>
            <div class="content">
                <legend>Civilité:</legend>
                <form method="POST" action="{{url('gender')}}">
                    @csrf
                    <div class="form-check-inline">
                        <ul>
                            @foreach ($genders as $gender)
                                <li>{{$gender->id}} - {{$gender->label}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @include('layouts.formcontrols.input',['name'=>'gender','label'=>'Civilité','required'=>'required','type'=>'text'])

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a  class="btn btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="years">
            <label for="years">Années</label>
            <div class="content">
                <form method="POST" action="{{url('year')}}">
                    @csrf
                    <div class="form-check-inline">
                        <ol>

                            @foreach ($years as $year)
                                <li>{{$year->id}} - {{$year->label}}</li>
                            @endforeach

                        </ol>
                    </div>
                    @include('layouts.formcontrols.input',['name'=>'year','label'=>'voulez vous ajouter? saisissez la valeur','required'=>'required','type'=>'number'])

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a  class="btn btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="groups">
            <label for="groups">Groupes</label>
            <div class="content">
                <form method="POST" action="{{url('group')}}">
                    @csrf
                    <ul>
                        @foreach ($groups as $group)
                            <li>{{$group->id}} - {{$group->label}}</li>
                        @endforeach
                    </ul>

                    @include('layouts.formcontrols.input',['name'=>'group','label'=>'Valeur tranche d\'age','required'=>'required','type'=>'text'])

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a  class="btn btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="incometype">
            <label for="incometype">Type de revenue</label>
            <div class="content">
                <form method="POST" action="{{url('incometype')}}">
                    @csrf
                    <div class="form-check-inline">
                        <ul>
                            @foreach ($income_types as $incometype)
                                <li>{{$incometype->id}} - {{$incometype->label}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @include('layouts.formcontrols.input',['name'=>'incometype','label'=>'Type de revenu','required'=>'required','type'=>'text'])

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a  class="btn btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>
        <li>
            <input type="radio" name="accordion" id="countries">
            <label for="countries">Pays</label>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus alias corporis culpa dolorum enim eveniet facere, ipsam iusto, laudantium neque officia, porro quae quaerat quidem quisquam voluptas voluptatem. Numquam.</p>
            </div>
        </li>
    </ul>











    {{--Tranche d'age'--}}
    <fieldset >
        <legend>Tranche d'âge:</legend>
    <form method="POST" action="{{url('agegap')}}">
        @csrf
        <div class='form-check-inline'>
            <ul>
                @foreach ($age_gaps as $age_gap)
                    <li>{{$age_gap->id}} - {{$age_gap->label}}</li>
                @endforeach
            </ul>
        </div>
            @include('layouts.formcontrols.input',['name'=>'agegap','label'=>'Valeur tranche d\'age','required'=>'required','type'=>'text'])
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
    </form>
    </fieldset>
    {{--Civilité--}}
    <fieldset>
        <legend>Civilité:</legend>
        <form method="POST" action="{{url('gender')}}">
            @csrf
            <div class="form-check-inline">
                <ul>
                    @foreach ($genders as $gender)
                        <li>{{$gender->id}} - {{$gender->label}}</li>
                    @endforeach
                </ul>
            </div>
            @include('layouts.formcontrols.input',['name'=>'gender','label'=>'Civilité','required'=>'required','type'=>'text'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{--Years--}}
    <fieldset>
        <legend>Année:</legend>
        <form method="POST" action="{{url('year')}}">
            @csrf
            <div class="form-check-inline">
            <ol>

                    @foreach ($years as $year)
                        <li>{{$year->id}} - {{$year->label}}</li>
                    @endforeach

            </ol>
            </div>
            @include('layouts.formcontrols.input',['name'=>'year','label'=>'voulez vous ajouter? saisissez la valeur','required'=>'required','type'=>'number'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{--Groupes--}}
    <fieldset>
        <legend>Groupes:</legend>
        <form method="POST" action="{{url('group')}}">
            @csrf
            <ul>
                @foreach ($groups as $group)
                    <li>{{$group->id}} - {{$group->label}}</li>
                @endforeach
            </ul>

            @include('layouts.formcontrols.input',['name'=>'group','label'=>'Valeur tranche d\'age','required'=>'required','type'=>'text'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{--IncomeType--}}
    <fieldset>
        <legend>Revenues types:</legend>
        <form method="POST" action="{{url('incometype')}}">
            @csrf
            <div class="form-check-inline">
                <ul>
                    @foreach ($income_types as $incometype)
                        <li>{{$incometype->id}} - {{$incometype->label}}</li>
                    @endforeach
                </ul>
            </div>
            @include('layouts.formcontrols.input',['name'=>'incometype','label'=>'Type de revenu','required'=>'required','type'=>'text'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{--Countries--}}
    <fieldset>
        <legend>Pays:</legend>
        <form method="POST" action="{{url('country')}}">
            @csrf
            <div class="form-check-inline">
                <select name="countries" id="countries">
                @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->phonecode}} - {{$country->label}}</option>
                @endforeach
                </select>
            </div>
            @include('layouts.formcontrols.input',['name'=>'country_name','label'=>'Pays','required'=>'required','type'=>'text'])
            @include('layouts.formcontrols.input',['name'=>'country_code','label'=>'Code du pays','required'=>'required','type'=>'text'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{--activities--}}
    <fieldset>
        <legend>Activités:</legend>
        <form method="POST" action="{{url('activity')}}">
            @csrf
            <div class="form-check-inline">
                <ul>

                    @foreach ($activities as $activity)
                        <li>{{$activity->id}} - {{$activity->label}}    (Group:{{$activity->group_id}})</li>
                    @endforeach

                </ul>
            </div>
            @include('layouts.formcontrols.input',['name'=>'activity','label'=>'Activité','required'=>'required','type'=>'text'])
            <label>Selectionner le groupe pour cet activité</label>
            <div class="form-check-inline">
                <select name="groupid" id="countries">
                    @foreach ($groups as $group)
                        <option value="{{$group->id}}">{{$group->id}} - {{$group->label}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="submit" class="btn btn-primary">Autre</button>
            </div>
        </form>
    </fieldset>
    {{--City--}}
    <fieldset>
        <legend>Villes:</legend>
        <form method="POST" action="{{url('city')}}">
            @csrf
            <div class="form-check-inline">
                <ul>
                    @foreach ($cities as $city)
                        <li>{{$city->cp}} - {{$city->label}}</li>
                    @endforeach
                </ul>
            </div>
            @include('layouts.formcontrols.input',['name'=>'city_name','label'=>'Ville','required'=>'required','type'=>'text'])
            @include('layouts.formcontrols.input',['name'=>'city_cp','label'=>'Cp','required'=>'required','type'=>'text'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{--Legal situation--}}
    <fieldset>
        <legend>Situation administrative:</legend>
        <form method="POST" action="{{url('legalsituation')}}">
            @csrf
            <div class="form-check-inline">
                <ul>
                    @foreach ($legal_situations as $legal_situation)
                        <li>{{$legal_situation->id}} - {{$legal_situation->label}}</li>
                    @endforeach
                </ul>
            </div>
            @include('layouts.formcontrols.input',['name'=>'legalsituation','label'=>'Situation administrative','required'=>'required','type'=>'text'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{---Payment method--}}
    <fieldset>
        <legend>Mode de paiment:</legend>
        <form method="POST" action="{{url('paymentmethod')}}">
            @csrf
            <div class="form-check-inline">
                <ul>
                    @foreach ($payment_methods as $payment_method)
                        <li>{{$payment_method->id}} - {{$payment_method->label}}</li>
                    @endforeach
                </ul>
            </div>
            @include('layouts.formcontrols.input',['name'=>'paymentmethod','label'=>'Nouveau mode de paiment','required'=>'required','type'=>'text'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{--Marital status--}}
    <fieldset>
        <legend>Situation familiale:</legend>
        <form method="POST" action="{{url('maritalstatus')}}">
            @csrf
            <div class="form-check-inline">
                <ul>
                    @foreach ($marital_statuses as $marital_status)
                        <li>{{$marital_status->id}} - {{$marital_status->label}}</li>
                    @endforeach
                </ul>
            </div>
            @include('layouts.formcontrols.input',['name'=>'maritalstatus','label'=>'Nouveau situation familiale','required'=>'required','type'=>'text'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{--Study level--}}
    <fieldset>
        <legend>Situation scolaire:</legend>
        <form method="POST" action="{{url('educationlevel')}}">
            @csrf
            <div class="form-check-inline">
                <ul>
                    @foreach ($education_levels as $education_level)
                        <li>{{$education_level->id}} - {{$education_level->label}}</li>
                    @endforeach
                </ul>
            </div>
            @include('layouts.formcontrols.input',['name'=>'educationlevel','label'=>'Nouvelle valeur','required'=>'required','type'=>'text'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
    {{--Teacher--}}
    <fieldset>
        <legend>Formateurs:</legend>
        <form method="POST" action="{{url('teacher')}}">
            @csrf
            <div class="form-check-inline">
                <ul>
                    @foreach ($teachers as $teacher)
                        <li>{{$teacher->id}} - {{$teacher->family_name}} {{$teacher->first_name}} {{$teacher->personal_phone_number==null ||$teacher->personal_phone_number==''?$teacher->public_phone_number:$teacher->personal_phone_number}}</li>
                    @endforeach
                </ul>
            </div>
            @include('layouts.formcontrols.input',['name'=>'familyname','label'=>'Nom de famille','required'=>'required','type'=>'text'])
            @include('layouts.formcontrols.input',['name'=>'firstname','label'=>'Prénom','required'=>'required','type'=>'text'])
            @include('layouts.formcontrols.input',['name'=>'personalphonenumber','label'=>'Tel portable','type'=>'tel'])
            @include('layouts.formcontrols.input',['name'=>'publicphonenumber','label'=>'Tel fixe','type'=>'tel'])
            @include('layouts.formcontrols.input',['name'=>'email','label'=>'email','required'=>'required','type'=>'email'])

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a  class="btn btn-primary" href="#">Autre</a>
            </div>
        </form>
    </fieldset>
@endsection
