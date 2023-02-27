<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 *
 */
class CreateAdherentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherent', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            /**
             * Nom de famille
             */
            $table->string('family_name');

            /**
             * Prénom
             */
            $table->string('first_name');

            /**
             * Civilité
             */
            $table->enum('gender',
                array(
                    'male',
                    'female'
                )
            );

            /**
             * Date de naissance
             */
            $table->date('date_of_birth');

            /**
             * Tranche d'âge
             */
            $table->unsignedBigInteger('age_range_id');
            $table->foreign('age_range_id')->references('id')->on('age_gap')->onDelete('cascade');



            /**
             * Numéro et nom de la rue
             */
            $table->string('address');

            /**
             * Code postale (trouvé dans base de table des codes postaux
             */
            $table->unsignedBigInteger('postal_code_id');

            #this code works in sqlite, but not on mysql
            $table->foreign('postal_code_id')->references('id')->on('postal_code')->onDelete('cascade');

            /**
             * Numéro de télephone
             */
            $table->string('tel');

            /**
             * Email
             */
            $table->string('email');

            /**
             * Lieu de naissance
             */
            $table->unsignedBigInteger('place_of_birth');
            $table->foreign('place_of_birth')->references('id')->on('country')->onDelete('cascade');

            /**
             * Nationalité
             */
            $table->unsignedBigInteger('nationality');
            $table->foreign('nationality')->references('id')->on('country')->onDelete('cascade');

            /**
             * situation administrative
             */

            $table->unsignedBigInteger('legal_situation');
            $table->foreign('legal_situation')->references('id')->on('legal_situation')->onDelete('cascade');
               /* array(
                'Acte de naissance',
                'Carte de séjour',
                'Carte d identité',
                'Passeport',
                'Récépissé',
                'Autre')
            );*/


            /**
             * Situation familiale
             */
            $table->enum('marital_status',
                array(
                    'Marié(e)',
                    'Célibataire',
                    'Veuf(ve)',
                    'Divorcé(e)'
                )
            );

            /**
             * Profession
             */
            $table->enum('profession',
                array(
                    'Salarié(e)',
                    'Demandeur d emploi',
                    'Etudiant(e)',
                    'Retraité(e)',
                    'Invalide',
                    'RSA',
                    'Bourse d études',
                    'Conjoint(e) salarié(e)'
                )
            );

            /**
             * Revenu
             */
            $table->enum('income_type',
                array(
                    'Salaire',
                    'Allocation chômage',
                    'Bourse d études',
                    'Retraite',
                    'Retraite-pension',
                    'RSA',
                    'Sans ressource',
                    'Conjoint(e) Salarié(e)'
                )
            );

            /**
             * Date d'inscription
             */
            $table->date('registration_date');

            /**
             * Date d'entrée en France
             */
            $table->date('french_entry_date');

            /**
             * Niveau d'étude
             */
            $table->enum('education_level',
                array(
                    'Non scolarisé',
                    'Primaire',
                    'Sécondaire',
                    'Universitaire'
                )
            );

            /**
             * Nombre d'enfants
             */
            $table->unsignedTinyInteger('number_of_children');

            /**
             * Date de sortie
             */
            $table->date('exit_date');

        });

    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adherent');
    }
}