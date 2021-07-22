<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCallNote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

         Schema::table('call_note', function (Blueprint $table) {
          
          $table->string('title')->nullable()->after('duration');
          $table->string('date')->nullable()->after('duration');
          $table->timestamp('type')->nullable()->after('date');
          $table->string('note')->nullable()->after('type');
          $table->string('status')->nullable()->after('note');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
