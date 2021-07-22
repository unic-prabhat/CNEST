<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname')->nullable();
            $table->string('surname')->nullable();
            $table->text('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('town')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('mobilenumber')->nullable();
            $table->string('landlinenumber')->nullable();
            $table->string('leadsource')->nullable();
            $table->integer('leadassignto')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
