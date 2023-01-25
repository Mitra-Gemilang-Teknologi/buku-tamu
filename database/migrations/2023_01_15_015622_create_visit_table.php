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
		Schema::create('visits', function (Blueprint $table) {
			$table->id('id');
			$table->string('visitor_name');
			$table->integer('visitor_age');
			$table->string('visitor_education');
			$table->string('visitor_gender');
			$table->string('visitor_disctrict')->nullable();
			$table->string('visitor_village')->nullable();
			$table->string('visitor_citizen_association')->nullable();
			$table->string('visitor_neighborhood_association')->nullable();
			$table->longText('visitor_address')->nullable();
			$table->longText('visitor_description')->nullable();
			$table->date('visit_time');
			$table->string('visit_purpose');
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
		Schema::dropIfExists('visit');
	}
}
