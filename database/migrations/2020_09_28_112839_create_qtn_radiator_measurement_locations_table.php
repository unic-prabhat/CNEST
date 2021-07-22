<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQtnRadiatorMeasurementLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qtn_radiator_measurement_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uniqid')->nullable();
            $table->string('rml_location')->nullable();
            $table->string('rml_height')->nullable();
            $table->string('rml_width')->nullable();
            $table->string('rml_psd')->nullable();
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
        Schema::dropIfExists('qtn_radiator_measurement_locations');
    }
}
