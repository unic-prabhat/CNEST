<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQtnTowelRailValvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qtn_towel_rail_valves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uniqid');
            $table->string('torv_type');
            $table->string('torv_angel');
            $table->string('torv_number');
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
        Schema::dropIfExists('qtn_towel_rail_valves');
    }
}
