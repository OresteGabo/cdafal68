@extends('layouts.layout')


@section('quick_links')
    <div class="overview">
        @include('layouts.heading.content_title',['icon'=>'uil uil-tachometer-fast-alt','label'=>'Liens rapide (Enfants)'])

        <div class="boxes">
            @include('layouts.heading.box',['box_number'=>'1','icon'=>'uil uil-kid','label'=>count($kids) .' enfants','data'=>''])
            @include('layouts.heading.box',['box_number'=>'2','icon'=>'uil uil-plus-circle','label'=>'Ajouter','data'=>''])
            @include('layouts.heading.box',['box_number'=>'3','icon'=>'uil uil-external-link-alt','label'=>'Autre operations','data'=>''])
        </div>
    </div>
@endsection

@section('content')
    <div class="activity">
        @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Liste des enfants'])

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom
                    <!--<label>
                        <input type="radio" id="last" name="Ppub" value="last"> intitule
                    </label>-->

                    <!--<label for="selectRange">Intitule</label><select id="selectRange" value="" onchange="radioCheck();">
                        <option value="">no filtre<i class="uil uil-filter"></i></option>
                        <option value="20181220-20190120"><input type="radio" id="dewey1" name="drone" value="dewey"></option>
                        <option value="20180720-20190120"><input type="radio" id="dewey2" name="drone" value="dewey"></option>
                        <option value="20180120-20190120"><input type="radio" id="dewey3" name="drone" value="dewey"></option>
                    </select>-->

                    <!--<button></button>-->
                </th>
                <th scope="col">Prénom<button><i class="uil uil-sort"></i></button></th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Est handicapé</th>
                <th scope="col">Tel parent</th>
            </tr>
            </thead>
            @foreach($kids as $kid)
                <tr>
                    <th scope="row">{{ $loop->index +1 }}</th>
                    <td>{{ $kid->first_name}}
                    </td>
                    <td>{{ $kid->first_name }} </td>
                    <td>{{ $kid->dob}}</td>
                    <td>{{ $kid->is_handicapped ? 'Oui' :'Non'}}</td>
                    <td>{{ $kid->parent_id }}</td>
                </tr>
            @endforeach

        </table>


        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

@endsection
