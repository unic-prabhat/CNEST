<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoilertypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boilertypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('boilertype')->nullable();
            $table->float('price')->nullable();
            $table->integer('boilerchoise_id')->nullable();
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
        Schema::dropIfExists('boilertypes');
    }
}
