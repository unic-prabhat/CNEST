<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToScheduletasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scheduletasks', function (Blueprint $table) {
            //
            $table->integer('user_id')->nullable()->after('lead_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scheduletasks', function (Blueprint $table) {
            //
            $table->dropColumn('user_id');
        });
    }
}
