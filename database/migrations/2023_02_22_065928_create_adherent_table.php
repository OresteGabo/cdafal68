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
            $table->string('family_name');
            $table->string('surname');
            $table->enum('gender', array('male', 'female'));
            $table->date('date_of_birth');

            //foreign key
            $table->unsignedBigInteger('age_range');
            $table->foreign('age_range')->references('id')->on('age_range')->onDelete('cascade');

            $table->string('address');
            $table->unsignedBigInteger('postal_code');
            $table->foreign('postal_code')->references('id')->on('postal_code')->onDelete('cascade');

            $table->string('tel');
            /**
             *
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
            $table->enum('legal_situation', array('Célibataire', 'Marié(e)','Marié(e)','Veuf(ve)','Divorcé(e)'));
            /**
             * Profession
             */
            $table->string('profession');
            /**
             * Revenu
             */
            $table->string('income_type');

            /**
             * date d'inscription
             */
            $table->date('registration_date');

            /**
             * Date d'entrée en France
             */
            $table->date('french_entry_date');

            /**
             * Niveau d'étude
             */
            $table->enum('education_level', array('Non scolarisé', 'Primaire','Sécondaire','Universitaire'));

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
