@extends('layouts.layout')


@section('quick_links')
    <div class="overview">
        @include('layouts.heading.content_title',['icon'=>'uil uil-tachometer-fast-alt','label'=>'Liens rapide'])

        <div class="boxes">
            @include('layouts.heading.box',['box_number'=>'1','icon'=>'uil uil-user','label'=>count($adherents).' '.'Adherents','data'=>''])
            @include('layouts.heading.box',['box_number'=>'2','icon'=>'uil uil-user-plus','label'=>'Ajouter','data'=>'','url'=>route('adherent.create')])
            @include('layouts.heading.box',['box_number'=>'3','icon'=>'uil uil-external-link-alt','label'=>'Autre actions','data'=>''])
        </div>
    </div>
@endsection

@section('content')
    <div class="activity">
        @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Liste des adhérents'])

        <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom
                </th>
                <th scope="col">Prénom<button><i class="uil uil-sort"></i></button></th>
                <th scope="col">Tel</th>
            </tr>
        </thead>

        @foreach($adherents as $adherent)
            <tr>
                <td> {{$loop->index +1}}</td>
                <td> {{$adherent->family_name}}</td>
                <td> {{$adherent->first_name}}</td>
                <td> {{$adherent->tel}}</td>
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
