<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visit', function (Blueprint $table) {
			$table->id('id_visit');
			$table->unsignedBigInteger('id_service_type');
			$table->string('visitor_name');
			$table->integer('visitor_age');
			$table->string('visitor_education');
			$table->string('visitor_gender');
			$table->string('visitor_disctrict');
			$table->string('visitor_village');
			$table->string('visitor_citizen_association');
			$table->string('visitor_neighborhood_association');
			$table->longText('visitor_description');
			$table->date('visit_time');
			$table->string('visit_purpose');
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('id_service_type')->references('id_service_type')->on('service_type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('visit');
	}
}
