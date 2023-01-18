<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveyor', function (Blueprint $table) {
            $table->id('id_surveyor');
            $table->unsignedBigInteger('id_service_type');
            $table->string('surveyor_name');
            $table->string('surveyor_phone');
            $table->string('surveyor_education');
            $table->string('surveyor_gender');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveyor');
    }
}





