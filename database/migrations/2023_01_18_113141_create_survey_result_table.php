<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_result', function (Blueprint $table) {
            $table->id('id_survey_result');
            $table->unsignedBigInteger('id_surveyor');
            $table->unsignedBigInteger('id_question');
            $table->unsignedBigInteger('id_answer_option');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_surveyor')->references('id_surveyor')->on('surveyor');
            $table->foreign('id_question')->references('id_question')->on('pertanyaan');
            $table->foreign('id_answer_option')->references('id_answer_option')->on('opsi_jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_result');
    }
}
