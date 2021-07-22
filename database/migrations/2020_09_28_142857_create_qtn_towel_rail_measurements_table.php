<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQtnTowelRailMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qtn_towel_rail_measurements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uniqid')->nullable();
            $table->string('trm_location')->nullable();
            $table->string('trm_height')->nullable();
            $table->string('trm_width')->nullable();
            $table->string('trm_color')->nullable();
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
        Schema::dropIfExists('qtn_towel_rail_measurements');
    }
}
