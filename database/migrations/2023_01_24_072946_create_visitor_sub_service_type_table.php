<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorSubServiceTypeTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visitor_sub_service_type', function (Blueprint $table) {
			$table->id('visitor_sub_service_type');
			$table->unsignedBigInteger('id');
			$table->unsignedBigInteger('id_sub_service_type');
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('id')->references('id')->on('visits');
			$table->foreign('id_sub_service_type')->references('id_sub_service_type')->on('sub_service_type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('visitor_sub_service_type');
	}
}
