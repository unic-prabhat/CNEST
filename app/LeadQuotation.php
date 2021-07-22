<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadQuotation extends Model
{

  protected $fillable = ['boiler_type_required', 'first_regular_boiler_choice', 'second_regular_boiler_choice','third_regular_boiler_choice','first_boiler_controls','second_boiler_controls','third_boiler_controls','cus_firstname','cus_surname','cus_email','cus_installation_address','cus_street_address','cus_postal_code','current_boiler_type','current_boiler_location','current_flue','existing_shower','new_fuel_type','new_boiler_yype','new_boiler_location','new_flue','new_flue_location','condensate_termination','new_controls','is_the_new_boiler_being_fitted_in_a_cupboard','will_the_cupboard_need_altering','removals','chemical_system_treatment','supply_change','gas_supply_length','electrical_work_required','asbestos_containing_materials','parking_requirements','materials_check','materials_check_options','magnetic_system_filter','additional_central_heating_parts','condesnate','condesnate_input','vented_cylinder_dimensions','radiator_requirements','rml_location','rml_height','rml_width','rml_psd','trv_size_from','trv_size_to','trv_quantity','trm_location','trm_height','trm_width','trm_color','torv_type','torv_angel','torv_number','how_many_days_of_engineer_labour','radiator_measurement_location','radiator_measurement_height','radiator_measurement_width','radiator_measurement_sign','thermostatic_radiator_size','thermostatic_radiator_type','thermostatic_radiator_qty','additional_notes','notes_to_officer_engineer','oe_description','oe_quantity','oe_price','boiler_1_guide_price','boiler_2_guide_price','boiler_3_guide_price','boiler_1_Amend','boiler_2_Amend','boiler_3_Amend','boiler1_total_price','boiler2_total_price','boiler3_total_price','deposit_required','email_quote_to_customer_now','user_id','userrole'];

    public function setCatAttribute($value)
    {
        $this->attributes['removals'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['removals'] = json_decode($value);
    }

    public function setElectricalworkAttribute($value)
    {
        $this->attributes['electrical_work_required'] = json_encode($value);
    }

    public function getElectricalworkAttribute($value)
    {
        return $this->attributes['electrical_work_required'] = json_decode($value);
    }

    public function setMaterialcheckoptinworkAttribute($value)
    {

    $this->attributes['materials_check_options'] = json_encode($value);

    }

   public function getMaterialcheckoptinworkAttribute($value)
   {

    return $this->attributes['materials_check_options'] = json_decode($value);

   }

   public function setradiatorrequirementworkAttribute($value)
   {

    $this->attributes['radiator_requirements'] = json_encode($value);
   }

  public function getradiatorrequirementworkAttribute($value)
  {
    return $this->attributes['radiator_requirements'] = json_decode($value);
  }

  public function setcondesnateinputworkAttribute($value)
  {
    $this->attributes['condesnate_input'] = json_encode($value);
  }

  public function getcondesnateinputworkAttribute($value)
  {
    return $this->attributes['condesnate_input'] = json_decode($value);
  }


}
