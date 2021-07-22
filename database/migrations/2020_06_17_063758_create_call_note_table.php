<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_note', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('notes')->nullable();
            $table->string('calls')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('lead_id')->nullable();
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
        Schema::dropIfExists('call_note');
    }
}
