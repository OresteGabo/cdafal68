<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('adress');
            $table->integer('fees');
            $table->string('public');
            $table->string('objectif');
            $table->string('meth_pedagogique');

            $table->unsignedBigInteger('intervenant');
            $table->foreign('intervenant')->references('id')->on('teachers')->onDelete('cascade');

            /*Mme kobel and cdafal adress, tel and fax should always be added on front end*/
            $table->unsignedBigInteger('responsable');
            $table->foreign('responsable')->references('id')->on('teachers')->onDelete('cascade');

            $table->unsignedBigInteger('program');
            $table->foreign('program')->references('id')->on('prog_element')->onDelete('cascade');



            /*
            $table->unsignedBigInteger('topics');
            $table->foreign('topics')->references('id')->on('study_topics')->onDelete('cascade');
            */





            /**/
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formation');
    }
}
