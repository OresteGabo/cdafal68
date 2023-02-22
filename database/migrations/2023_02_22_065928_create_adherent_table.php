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
                [
                    'male',
                    'female'
                ]
            );

            /**
             * Date de naissance
             */
            $table->date('date_of_birth');

            /**
             * Tranche d'âge
             */
            $table->enum('age_range',
                [
                    '18-25',
                    '26-64',
                    'Plus de 64'
                ]
            );

            /**
             * Numéro et nom de la rue
             */
            $table->string('address');

            /**
             * Code postale (trouvé dans base de table des codes postaux
             */
            $table->unsignedBigInteger('postal_code');
            $table->foreign('postal_code')->references('id')->on('postal_code')->onDelete('cascade');

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
            $table->string('place_of_birth');

            /**
             * Nationalité
             */
            $table->string('nationality');

            /**
             * situation administrative
             */
            $table->enum('legal_situation',
                [
                    'Acte de naissance',
                    'Carte de séjour',
                    'Carte d\'identité',
                    'Passeport',
                    'Récépissé',
                    'Autre'
                ]
            );

            /**
             * Situation familiale
             */
            $table->enum('marital_status',
                [
                    'Marié(e)',
                    'Célibataire',
                    'Veuf(ve)',
                    'Divorcé(e)'
                ]
            );

            /**
             * Profession
             */
            $table->enum('profession',
                [
                    'Salarié(e)',
                    'Demandeur d\'emploi',
                    'Etudiant(e)',
                    'Retraité(e)',
                    'Invalide',
                    'RSA',
                    'Bourse d\'études',
                    'Conjoint(e) salarié(e)'
                ]
            );

            /**
             * Revenu
             */
            $table->enum('income_type',
                [
                    'Salaire',
                    'Allocation chômage',
                    'Bourse d\'études',
                    'Retraite',
                    'Retraite-pension',
                    'RSA',
                    'Sans ressource',
                    'Conjoint(e) Salarié(e)'
                ]
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
                [
                    'Non scolarisé',
                    'Primaire',
                    'Sécondaire',
                    'Universitaire'
                ]
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
