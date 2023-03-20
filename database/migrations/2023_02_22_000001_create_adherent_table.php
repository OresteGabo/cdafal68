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
        Schema::create('adherents', function (Blueprint $table) {
            $table->bigIncrements('id');
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
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');

            /**
             * Date de naissance
             */
            $table->date('date_of_birth');

            /**
             * Tranche d'âge
             */
            $table->unsignedBigInteger('age_gap_id');
            $table->foreign('age_gap_id')->references('id')->on('age_gaps')->onDelete('cascade');



            /**
             * Numéro et nom de la rue
             */
            $table->string('address');

            /**
             * Code postale (trouvé dans base de table des codes postaux ville
             */
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            /**
             * QPV (Quartier politique de la ville)
             */
            $table->boolean('QPV');

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
            $table->unsignedBigInteger('citizenship');
            $table->foreign('citizenship')->references('id')->on('country')->onDelete('cascade');

            /**
             * situation administrative
             */

            $table->unsignedBigInteger('legal_situation_id');
            $table->foreign('legal_situation_id')->references('id')->on('legal_situation')->onDelete('cascade');


            /**
             * Situation familiale
             */
            $table->unsignedBigInteger('marital_status_id');
            $table->foreign('marital_status_id')->references('id')->on('marital_status')->onDelete('cascade');



            /**
             * Revenu
             */
            $table->unsignedBigInteger('income_type_id');
            $table->foreign('income_type_id')->references('id')->on('income_type')->onDelete('cascade');


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
            $table->unsignedBigInteger('education_level_id');
            $table->foreign('education_level_id')->references('id')->on('education_level')->onDelete('cascade');


            /**
             * Date de sortie
             */
            $table->date('exit_date');

            /**
             * CIR(contrat d'integration républiquain)
             */
            $table->boolean('CIR');

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
