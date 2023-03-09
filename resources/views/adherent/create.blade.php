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

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>


                    <div class="mb-3">
                        <label for="name" class="form-label"><i class="fas fa-user"></i> Nom de famille:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <div id="name-error-msg" class="invalid-feedback"></div>
                    </div>


                    <div class="mb-3">
                        <label for="surname" class="form-label">Prénom:</label>
                        <input type="text" name="surname" id="surname" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="date-of-birth" class="form-label">Date de naissance:</label>
                        <input type="date" name="date_of_birth" id="date-of-birth" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="postal-code" class="form-label">Code postale:</label>
                        <input type="text" name="postal_code" id="postal-code" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="age-gap" class="form-label">Tranche d'age:</label>
                        <select name="age_gap" id="age-gap" class="form-select" required>
                            <option value="">Choississez</option>
                            <!--@include('layouts.selects.options',['data_array'=>$age_gaps])-->
                        </select>
                        <div id="age-gap-error-msg" class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="tel" class="form-label">Téléphone:</label>
                        <input type="tel" name="tel" id="tel" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="place-of-birth" class="form-label">Lieu de naissance:</label>
                        <input type="text" name="place_of_birth" id="place-of-birth" class="form-control" required>
                    </div>


                    <div class="mb-3">
                        <label for="place-of-birth" class="form-label">Lieu de naissance:</label>
                        <select name="place-of-birth" id="place-of-birth" class="form-select" required>
                            <option value="">Sélectionnez un pays</option>
                            <!--@include('layouts.selects.options',['data_array'=>$countries])-->
                        </select>
                        <div id="place-of-birth-error-msg" class="invalid-feedback"></div>
                    </div>


                    <div class="mb-3">
                        <label for="citizenship" class="form-label">Nationalité:</label>
                        <select name="citizenship" id="citizenship" class="form-select" required>
                            <option value="">Sélectionnez un pays</option>
                            @include('layouts.selects.options',['data_array'=>$countries])
                        </select>
                        <div id="citizenship-error-msg" class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="marital-status" class="form-label">Situation familiale:</label>
                        <select name="marital_status" id="marital-status" class="form-select" required>
                            <option value="">Choississez</option>
                            @include('layouts.selects.options',['data_array'=>$marital_statuses])
                        </select>
                        <div id="marital-status-error-msg" class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="income-type" class="form-label">Revenu:</label>

                        <select name="income-type" id="income-type" class="form-select" required>
                            <option value="">Sélectionnez le type de révenus</option>
                            @include('layouts.selects.options',['data_array'=>$income_types])
                        </select>
                        <div id="income-type-error-msg" class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="registration-date" class="form-label">Date d'adhésion:</label>
                        <input type="date" name="registration_date" id="registration-date" class="form-control"
                               required>
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Créer adhérent</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
