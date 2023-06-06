<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyTopicItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_topic_item', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('label');

            $table->unsignedBigInteger('study_topic_id');
            $table->foreign('study_topic_id')->references('id')->on('study_topics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_topic_item');
    }
}
