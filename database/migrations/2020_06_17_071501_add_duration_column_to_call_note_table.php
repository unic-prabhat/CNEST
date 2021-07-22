<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDurationColumnToCallNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('call_note', function (Blueprint $table) {
            //
            $table->string('duration')->nullable()->after('calls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('call_note', function (Blueprint $table) {
            //
            $table->dropColumn('duration');
        });
    }
}
