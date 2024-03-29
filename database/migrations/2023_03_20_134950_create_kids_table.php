<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->nullable();
            $table->string('family_name');
            $table->string('first_name');
            $table->date('dob');
            $table->boolean('is_handicapped');

            /**
             * Civilité
             */
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');

            /**
             * Code postale (trouvé dans base de table des codes postaux
             */
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('adherents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kids');
    }
}
