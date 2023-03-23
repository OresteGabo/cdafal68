@extends('layouts.layout')
@section('content')
    @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Formulaire des enfants'])
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{route('kids.store')}}">
                    @csrf

                    @include('layouts.formcontrols.select',['name'=>'gender_id','label'=>'Civilité','required'=>'required','data_array'=>$genders])
                    @include('layouts.formcontrols.input',['name'=>'family_name','label'=>'Nom de famille','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['name'=>'first_name','label'=>'Prénom','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['name'=>'dob','label'=>'Date de naissance','required'=>'required','type'=>'date'])


                    <div class="form-check">
                        <input type="checkbox" id="is_handicapped" name="is_handicapped" class="form-check-input">
                        <label for="is_handicapped" class="form-check-label">Is Handicapped</label>
                    </div>

                    <div class="form-group">
                        <label for="parent_id">Parent Name:</label>
                        <select id="parent_id" name="parent_id" class="form-control">
                            <option value="">Select Parent</option>
                            @foreach ($parents as $parent) {
                                <option value="{{ $parent->id }}">{{ $parent->gender_id==1?'Mr':'Mme' }}. {{ ucfirst($parent->first_name) }} {{ strtoupper($parent->family_name) }}</option>
                            }
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Créer enfant</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
