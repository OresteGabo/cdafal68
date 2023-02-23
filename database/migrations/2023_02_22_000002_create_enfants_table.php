<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('family_name');
            $table->string('first_name');
            $table->date('date_of_birth');
            $table->boolean('is_handicapped');

            /**
             * Code postale (trouvé dans base de table des codes postaux
             */
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('adherent')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfants');
    }
}
