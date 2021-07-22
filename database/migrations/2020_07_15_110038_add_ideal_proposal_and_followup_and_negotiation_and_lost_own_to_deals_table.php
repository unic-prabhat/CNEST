<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdealProposalAndFollowupAndNegotiationAndLostOwnToDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deals', function (Blueprint $table) {
            //
            $table->string('idealproposal');
            $table->string('followup');
            $table->string('negotation');
            $table->string('lost');
            $table->string('won');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deals', function (Blueprint $table) {
            //
            $table->dropColumn('idealproposal');
            $table->dropColumn('followup');
            $table->dropColumn('negotation');
            $table->dropColumn('lost');
            $table->dropColumn('won');
        });
    }
}
