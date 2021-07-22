<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectradiocheckboxchoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectradiocheckboxchoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bolt');
            $table->float('price');
            $table->integer('select');
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
        Schema::dropIfExists('selectradiocheckboxchoices');
    }
}
