@extends('layouts.layout')
@section('content')
<p>This is adherents index</p>
@endsection

@section('recent_activities')
    <div class="activity">
        <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Activités recentes</span>
        </div>
        <table class="collapse">

            <table>
            <tr>
                <th>intitule<button><i class="uil uil-filter"></i></button></th>
                <th>date<button><i class="uil uil-sort"></i></button></th>
                <th>description</th>
            </tr>
            @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity['intitule'] }}</td>
                    <td>{{ $activity['date'] }} </td>
                    <td>{{ $activity['description'] }}</td>
                </tr>
            @endforeach
            </table>








@endsection
