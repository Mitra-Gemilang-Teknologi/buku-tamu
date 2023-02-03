<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubServiceTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_service_type', function (Blueprint $table) {
            $table->id('id_sub_service_type');
            $table->unsignedBigInteger('id_service_type');
            $table->string('sub_service_name');
            $table->softDeletes();
            $table->timestamps();
            
            // $table->foreign('id_service_type')->references('id_service_type')->on('service_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_service_type');
    }
}
