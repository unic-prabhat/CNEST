<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQtnOptionalDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qtn_optional_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uniqid');
            $table->string('oe_description');
            $table->string('oe_quantity');
            $table->string('oe_price');
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
        Schema::dropIfExists('qtn_optional_descriptions');
    }
}
