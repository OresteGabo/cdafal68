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
            <!-- THIS PHP FUNCTION WILL BE REMOVED, AND REAL DATA WILL BE INSERTED -->
            <?php
            function randomDate($start_date, $end_date)
            {
                $timestamp = rand( strtotime("Jan 01 2020"), strtotime("May 01 2023") );
                $random_Date = date("d.m.Y", $timestamp );
                return $random_Date;
            }
            ?>
                <tr >
                    <th>Intitulé de l'activité <button><i class="uil uil-filter"></i></button></th>
                    <th>Date heure <button><i class="uil uil-sort"></i></button></th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>Ajout d'un adhérent</td>
                    <td><?php echo randomDate('1-1-2020','1-1-2020') ?></td>
                    <td>0769097991</td>
                </tr>
                <tr>
                    <td>Suppression d'un adhérent</td>
                    <td><?php echo randomDate('1-1-2020','1-1-2020') ?></td>
                    <td>Manque d'activité</td>
                </tr>
                <tr>
                    <td>Paiement</td>
                    <td><?php echo randomDate('1-1-2020','1-1-2020') ?></td>
                    <td>Enregistrement d'un paiement Pour la formation</td>
                </tr>
                <tr>
                    <td>Mise à jour d'un adherent</td>
                    <td><?php echo randomDate('1-1-2020','1-1-2020') ?></td>
                    <td>Changement de son adresse</td>
                </tr>
                <tr>
                    <td>Formation</td>
                    <td><?php echo randomDate('1-1-2020','1-1-2020') ?></td>
                    <td>Inscription à une formation</td>
                </tr>
            <tr>
                <td>Adhérent</td>
                <td><?php echo randomDate('1-1-2020','1-1-2020') ?></td>
                <td>Enregistrement d'un enfant</td>
            </tr>
            <tr>
                <td>Adhérent</td>
                <td><?php echo randomDate('1-1-2020','1-1-2020') ?></td>
                <td>MAJ des information d'un enfant</td>
            </tr>
            <tr>
                <td>Adhérent</td>
                <td><?php echo randomDate('1-1-2020','1-1-2020') ?></td>
                <td>Enregistrement d'un enfant</td>
            </tr>
            <tr>
                <td>Adhérent</td>
                <td><?php echo randomDate('1-1-2020','1-1-2020') ?></td>
                <td>MAJ des information d'un enfant</td>
            </tr>


            </table>

    </div>

@endsection
