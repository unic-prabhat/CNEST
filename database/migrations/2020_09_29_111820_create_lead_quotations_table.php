<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('main_uniqid');
            $table->text('boiler_type_required')->nullable();
            $table->text('first_regular_boiler_choice')->nullable();
            $table->text('second_regular_boiler_choice')->nullable();
            $table->text('third_regular_boiler_choice')->nullable();
            $table->text('first_boiler_controls')->nullable();
            $table->text('second_boiler_controls')->nullable();
            $table->text('third_boiler_controls')->nullable();
            $table->text('bolt_ons')->nullable();
            $table->text('cus_firstname')->nullable();
            $table->text('cus_surname')->nullable();
            $table->text('cus_email')->nullable();
            $table->text('cus_installation_address')->nullable();
            $table->text('cus_postal_code')->nullable();
            $table->text('cus_street_address')->nullable();
            $table->text('current_boiler_type')->nullable();
            $table->text('current_boiler_location')->nullable();
            $table->text('current_flue')->nullable();
            $table->text('existing_shower')->nullable();
            $table->text('new_fuel_type')->nullable();
            $table->text('new_boiler_yype')->nullable();
            $table->text('new_boiler_location')->nullable();
            $table->text('new_flue')->nullable();
            $table->text('new_flue_location')->nullable();
            $table->text('condensate_termination')->nullable();
            $table->text('new_controls')->nullable();
            $table->text('is_the_new_boiler_being_fitted_in_a_cupboard')->nullable();
            $table->text('removals')->nullable();
            $table->text('chemical_system_treatment')->nullable();
            $table->text('gas_supply_requirements')->nullable();
            $table->text('gas_supply_length')->nullable();
            $table->text('electrical_work_required')->nullable();
            $table->text('asbestos_containing_materials')->nullable();
            $table->text('parking_requirements')->nullable();
            $table->text('60_100mm_flue_kit')->nullable();
            $table->text('60_100mm_flue_kit_details')->nullable();
            $table->text('magnetic_system_filter')->nullable();
            $table->text('additional_central_heating_parts')->nullable();
            $table->text('condensate_components')->nullable();
            $table->text('additional_condensate_components')->nullable();
            $table->text('vented_cylinder_dimensions')->nullable();
            $table->text('radiator_requirements')->nullable();
            $table->text('how_many_days_of_engineer_labour')->nullable();
            $table->text('additional_notes')->nullable();
            $table->text('notes_to_officer_engineer')->nullable();
            $table->text('boiler_1_guide_price')->nullable();
            $table->text('boiler_2_guide_price')->nullable();
            $table->text('boiler_3_guide_price')->nullable();
            $table->text('boiler_1_Amend')->nullable();
            $table->text('boiler_2_Amend')->nullable();
            $table->text('boiler_3_Amend')->nullable();
            $table->text('deposit_required')->nullable();
            $table->text('email_quote_to_customer_now')->nullable();
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
        Schema::dropIfExists('lead_quotations');
    }
}
