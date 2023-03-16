<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdherentActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherent_activity', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('adherent_id');
            $table->foreign('adherent_id')->references('id')->on('adherents')->onDelete('cascade');

            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id')->references('id')->on('activity')->onDelete('cascade');

            $table->boolean('exit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adherent_activity');
    }
}
