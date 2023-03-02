@extends('layouts.layout')
@section('content')
<p>This is adherents index</p>
@endsection

@section('quick_links')
    <div class="overview">
        @include('layouts.heading.content_title',['icon'=>'uil uil-tachometer-fast-alt','label'=>'Liens rapide'])

        <div class="boxes">
            @include('layouts.heading.box',['box_number'=>'1','icon'=>'uil uil-user','label'=>'----','data'=>''])
            @include('layouts.heading.box',['box_number'=>'2','icon'=>'uil uil-user-plus','label'=>'Ajouter','data'=>''])
            @include('layouts.heading.box',['box_number'=>'3','icon'=>'uil uil-external-link-alt','label'=>'Autre actions','data'=>''])
        </div>
    </div>
@endsection

@section('more_data')
    <div class="activity">
        @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Liste des adhérents'])

        <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">intituléss
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
                <th scope="col">date<button><i class="uil uil-sort"></i></button></th>
                <th scope="col">description</th>
            </tr>
        </thead>
        @foreach($activities as $activity)
            <tr>
                <th scope="row">{{ $loop->index +1 }}</th>
                <td>{{ $activity['intitule'] }}
                </td>
                <td>{{ $activity['date'] }} </td>
                <td>{{ $activity['description'] }}</td>
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
