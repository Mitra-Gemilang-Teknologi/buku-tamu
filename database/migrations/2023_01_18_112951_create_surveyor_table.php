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
			$table->id('id');
			$table->string('surveyor_name');
			$table->integer('surveyor_age');
			$table->string('surveyor_education');
			$table->string('surveyor_gender');
			$table->string('surveyor_disctrict')->nullable();
			$table->string('surveyor_village')->nullable();
			$table->string('surveyor_citizen_association')->nullable();
			$table->string('surveyor_neighborhood_association')->nullable();
			$table->longText('surveyor_address')->nullable();
			$table->longText('surveyor_description');
			$table->string('surveyor_time');
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
