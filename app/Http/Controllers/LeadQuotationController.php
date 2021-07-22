<?php

namespace App\Http\Controllers;

use App\LeadQuotation;

use Illuminate\Http\Request;

class LeadQuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new LeadQuotation();
      $data->main_uniqid=$request->input('main_uniqid');
      $data->boiler_type_required=$request->input('boiler_id');
      $data->first_regular_boiler_choice=$request->input('first_regular_boiler_choice');
      $data->second_regular_boiler_choice=$request->input('second_regular_boiler_choice');
	  $data->third_regular_boiler_choice=$request->input('third_regular_boiler_choice');
      $data->first_boiler_controls=$request->input('first_boiler_controls');
	  $data->second_boiler_controls=$request->input('second_boiler_controls');
      $data->third_boiler_controls=$request->input('third_boiler_controls');
	  $data->bolt_ons=$request->input('bolt_ons');
      $data->cus_firstname=$request->input('cus_firstname');
	  $data->cus_surname=$request->input('cus_surname');
	  $data->cus_email=$request->input('email');
	  $data->cus_installation_address=$request->input('cus_installation_address');
	  $data->cus_postal_code=$request->input('cus_postal_code');
	  $data->cus_street_address=$request->input('cus_street_address');	  
	  $data->current_boiler_type=$request->input('current_boiler_type');
      $data->current_boiler_location=$request->input('current_boiler_location');
	  $data->current_flue=$request->input('current_flue');
      $data->existing_shower=$request->input('existing_shower');
	  $data->new_fuel_type=$request->input('new_fuel_type');
      $data->new_boiler_yype=$request->input('new_boiler_yype');
	  $data->new_boiler_location=$request->input('new_boiler_location');	  
	  $data->new_flue_location=$request->input('new_flue_location');
	  $data->new_flue=$request->input('new_flue');	  
      $data->condensate_termination=$request->input('condensate_termination');
	  $data->new_controls=$request->input('new_controls');
      $data->is_the_new_boiler_being_fitted_in_a_cupboard=$request->input('is_the_new_boiler_being_fitted_in_a_cupboard');
	  $data->removals=$request->input('removals');
      $data->chemical_system_treatment=$request->input('chemical_system_treatment');
	  $data->gas_supply_requirements=$request->input('gas_supply_requirements');
      $data->gas_supply_length=$request->input('gas_supply_length');
	  
	  $data->asbestos_containing_materials=$request->input('asbestos_containing_materials');
	  $data->electrical_work_required=$request->input('electrical_work_required');
	  $data->parking_requirements=$request->input('parking_requirements');	  
	  $data->sixty_hundred_mm_flue_kit=$request->input('materials_check');      
	  $data->magnetic_system_filter=$request->input('magnetic_system_filter');
      $data->additional_central_heating_parts=$request->input('additional_central_heating_parts');
	  $data->condensate_components=$request->input('condesnate');      
	  $data->vented_cylinder_dimensions=$request->input('vented_cylinder_dimensions');	  
	  $data->radiator_requirements=$request->input('radiator_requirements');
      $data->how_many_days_of_engineer_labour=$request->input('how_many_days_of_engineer_labour');
	  $data->additional_notes=$request->input('additional_notes');
      $data->notes_to_officer_engineer=$request->input('notes_to_officer_engineer');
	  $data->boiler_1_guide_price=$request->input('boiler_1_guide_price');
      $data->boiler_2_guide_price=$request->input('boiler_2_guide_price');
	  $data->boiler_3_guide_price=$request->input('boiler_3_guide_price');
      $data->boiler_1_Amend=$request->input('boiler_1_Amend');
	  $data->boiler_2_Amend=$request->input('boiler_2_Amend');
	  $data->boiler_3_Amend=$request->input('boiler_3_Amend');
	  $data->deposit_required=$request->input('deposit_required');
	  $data->email_quote_to_customer_now=$request->input('email_quote_to_customer_now');	  
	  
      $data->save();
      echo "Success";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LeadQuotation  $leadQuotation
     * @return \Illuminate\Http\Response
     */
    public function show(LeadQuotation $leadQuotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LeadQuotation  $leadQuotation
     * @return \Illuminate\Http\Response
     */
    public function edit(LeadQuotation $leadQuotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LeadQuotation  $leadQuotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeadQuotation $leadQuotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LeadQuotation  $leadQuotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeadQuotation $leadQuotation)
    {
        //
    }
}
