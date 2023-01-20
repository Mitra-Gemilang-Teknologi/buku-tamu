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
			$table->longText('surveyor_description');
			$table->string('id_answer_option');
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('id_service_type')->references('id_service_type')->on('jenis_layanan');
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
