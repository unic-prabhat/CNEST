<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoltschoosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boltschoosens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id')->nullable();
            $table->string('boltsid')->nullable();
            $table->string('value')->nullable();
            $table->string('qty')->nullable();
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
        Schema::dropIfExists('boltschoosens');
    }
}
