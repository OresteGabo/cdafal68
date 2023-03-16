<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id();
            $table->string('family_name');
            $table->string('first_name');
            $table->string('email');

            /**
             * This number will not be shown to any public person! only other same hierarchical level people will be able to see them, or higher
             */
            $table->string('personal_phone_number');
            $table->string('public_phone_number');//CDAFAL number by default
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formateur');
    }
}
