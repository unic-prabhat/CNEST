<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_path');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('website_url');
            $table->string('company_name');
            $table->string('country');
            $table->string('generated_by');
            $table->string('lead_owner');
            $table->string('contact_lead_status');
            $table->string('deal_name');
            $table->string('deal_stage');
            $table->integer('deal_amount');
            $table->date('deal_closing_date');
            $table->string('deal_owner');
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
        Schema::dropIfExists('contact_lists');
    }
}
